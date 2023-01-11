<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller {
    public function upload(Request $request)
    {
        // загрузка файла
        if ($request->isMethod('post') && $request->file('userfile')) {

            $file = $request->file('userfile');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName(); // image.jpg

            Storage::putFileAs($upload_folder, $file, $filename);

        }
    }

    public function index()
    {
        return view('uploadfile');
    }
}
