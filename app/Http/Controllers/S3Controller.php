<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class S3Controller extends Controller
{
    public function index()
    {
        $files = Storage::disk('s3')->files('uploads'); // list files in uploads folder

        $fileList = array_map(function ($file) {
            return [
                'name' => basename($file), 
                'url'  => Storage::disk('s3')->url($file),
            ];
        }, $files);

        return view('frontend.home.index', ['files' => $fileList]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:5120', // max 5MB
        ]);

        $path = $request->file('file')->storePublicly('uploads', 's3');
        Storage::disk('s3')->url($path);

        return redirect()->route('frontend.upload.form')
                         ->with('success', 'File uploaded to S3: ' . basename($path));
    }
}
