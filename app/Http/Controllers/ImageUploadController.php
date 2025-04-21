<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json(['error' => 'No image file found'], 400);
        }

        $file = $request->file('file');
        $validatedData = $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120' // 5MB max
        ]);

        try {
            // Generate unique filename
            $fileName = 'questions/' . Str::uuid() . '.' . $file->getClientOriginalExtension();
            
            // Store the file
            $path = Storage::disk('public')->putFileAs('', $file, $fileName);
            
            return response()->json([
                'url' => Storage::disk('public')->url($fileName)
            ]);
        } catch (\Exception $e) {
            \Log::error('Image upload failed: ' . $e->getMessage());
            return response()->json(['error' => 'Upload failed'], 500);
        }
    }
}