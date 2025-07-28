// Firebase Configuration Debug Script
document.addEventListener('DOMContentLoaded', function() {
    console.log('=== Firebase Configuration Debug ===');
    
    // Check if Firebase config is available
    if (window.firebaseConfig) {
        console.log('✅ Firebase config found:', window.firebaseConfig);
        
        // Check required environment variables
        const requiredVars = [
            'FIREBASE_API_KEY',
            'FIREBASE_AUTH_DOMAIN', 
            'FIREBASE_PROJECT_ID',
            'FIREBASE_STORAGE_BUCKET',
            'FIREBASE_MESSAGING_SENDER_ID',
            'FIREBASE_APP_ID'
        ];
        
        const configKeys = [
            'apiKey',
            'authDomain',
            'projectId', 
            'storageBucket',
            'messagingSenderId',
            'appId'
        ];
        
        console.log('\n🔍 Checking Firebase configuration:');
        
        configKeys.forEach((key, index) => {
            const value = window.firebaseConfig[key];
            if (value) {
                console.log(`✅ ${requiredVars[index]}: ${value.substring(0, 10)}...`);
            } else {
                console.log(`❌ ${requiredVars[index]}: MISSING`);
            }
        });
        
        // Check if we have minimum required config
        const hasMinConfig = window.firebaseConfig.apiKey && 
                           window.firebaseConfig.projectId && 
                           window.firebaseConfig.appId;
        
        if (hasMinConfig) {
            console.log('\n✅ Minimum Firebase configuration is present');
        } else {
            console.log('\n❌ Minimum Firebase configuration is missing');
            console.log('Required: apiKey, projectId, appId');
        }
        
    } else {
        console.log('❌ Firebase config not found');
        console.log('Make sure your .env file has the required Firebase variables:');
        console.log('FIREBASE_API_KEY=your_api_key');
        console.log('FIREBASE_AUTH_DOMAIN=your_project.firebaseapp.com');
        console.log('FIREBASE_PROJECT_ID=your_project_id');
        console.log('FIREBASE_STORAGE_BUCKET=your_project.appspot.com');
        console.log('FIREBASE_MESSAGING_SENDER_ID=your_sender_id');
        console.log('FIREBASE_APP_ID=your_app_id');
        console.log('FIREBASE_MEASUREMENT_ID=your_measurement_id');
    }
    
    console.log('\n=== End Firebase Debug ===');
}); 