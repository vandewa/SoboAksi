<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HelperController extends Controller
{
    public function showPicture(Request $request)
    {
        if (Storage::exists($request->path)) {
            return Storage::response($request->path);
        }

        return "File tidak ditemukan";
    }
}
