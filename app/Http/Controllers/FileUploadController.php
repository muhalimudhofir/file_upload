<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:1000',
        ]);

        // if ($request->hasFile('berkas')) {
        //     //
        // } else {
        //     echo 'tidak ada berkas yang di upload';
        // }

        $path = $request->berkas->store('public');
        echo "Proses upload berhasil, file berada di $path";
    }
}
