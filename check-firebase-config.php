<?php

/**
 * Firebase Configuration Checker
 * 
 * This script helps you verify that all required Firebase environment variables are set.
 * Run this script to check your Firebase configuration.
 */

echo "=== Firebase Configuration Checker ===\n\n";

// Load environment variables
$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
    $envContent = file_get_contents($envFile);
    $lines = explode("\n", $envContent);
    
    $firebaseVars = [];
    foreach ($lines as $line) {
        $line = trim($line);
        if (strpos($line, 'FIREBASE_') === 0 && !strpos($line, '#')) {
            $parts = explode('=', $line, 2);
            if (count($parts) === 2) {
                $firebaseVars[$parts[0]] = $parts[1];
            }
        }
    }
    
    echo "Found Firebase variables in .env file:\n";
    foreach ($firebaseVars as $key => $value) {
        $status = !empty($value) ? "✅" : "❌";
        $displayValue = !empty($value) ? substr($value, 0, 20) . "..." : "EMPTY";
        echo "{$status} {$key}: {$displayValue}\n";
    }
    
    // Check required variables
    $requiredVars = [
        'FIREBASE_API_KEY',
        'FIREBASE_AUTH_DOMAIN',
        'FIREBASE_PROJECT_ID',
        'FIREBASE_STORAGE_BUCKET',
        'FIREBASE_MESSAGING_SENDER_ID',
        'FIREBASE_APP_ID',
        'FIREBASE_MEASUREMENT_ID'
    ];
    
    echo "\nChecking required variables:\n";
    $missingVars = [];
    foreach ($requiredVars as $var) {
        if (isset($firebaseVars[$var]) && !empty($firebaseVars[$var])) {
            echo "✅ {$var}: Set\n";
        } else {
            echo "❌ {$var}: Missing or empty\n";
            $missingVars[] = $var;
        }
    }
    
    if (empty($missingVars)) {
        echo "\n🎉 All Firebase variables are properly configured!\n";
    } else {
        echo "\n⚠️  Missing Firebase variables:\n";
        foreach ($missingVars as $var) {
            echo "   - {$var}\n";
        }
        echo "\nPlease add these variables to your .env file:\n";
        foreach ($missingVars as $var) {
            echo "{$var}=your_value_here\n";
        }
    }
    
} else {
    echo "❌ .env file not found!\n";
    echo "Please create a .env file with your Firebase configuration.\n";
}

echo "\n=== End Firebase Configuration Check ===\n"; 