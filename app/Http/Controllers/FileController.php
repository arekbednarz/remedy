<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{

    private $avatarsPath;

    public function __construct()
    {
        $this->avatarsPath = '/public/avatars';
    }

    public function upload(Request $request) {

        $userId = \Auth::user()->id;
        $key = $userId.'profilepicture'.$userId;

        $photo = $request->file('file');

        $name = sha1($key);
        $saveMame = $name . '.' . $photo->getClientOriginalExtension();

        if ($photo->storePubliclyAs($this->avatarsPath, $saveMame)) {
            return response()->json($saveMame, 200);
        }
    }

    public function remove(Request $request) {

        $filename = storage_path('app'.$this->avatarsPath.'/'.$request->filename);

        if (file_exists($filename)) {
            unlink($filename);
        }

        return response()->json(['message' => 'File successfully delete'], 200);
    }
}
