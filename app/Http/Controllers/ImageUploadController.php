<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json(['error' => 'No image file found'], 400);
        }

        $file = $request->file('file');
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120' // 5MB max
        ]);

        try {
            // Create questions directory if it doesn't exist
            $directory = public_path('images/questions');
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            // Generate unique filename
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $filePath = 'images/questions/' . $fileName;

            // Move the file to the public directory
            $file->move(public_path('images/questions'), $fileName);

            // Return the URL that can be used in the frontend
            return response()->json([
                'url' => asset($filePath)
            ]);
        } catch (\Exception $e) {
            Log::error('Image upload failed: ' . $e->getMessage());
            return response()->json(['error' => 'Upload failed: ' . $e->getMessage()], 500);
        }
    }
}