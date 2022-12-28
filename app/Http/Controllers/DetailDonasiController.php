<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aksi;

class DetailDonasiController extends Controller
{
    
    public function detail($id)
    {
        $data = Aksi::find($id);

        return view('front.detail-donasi', compact('data'));
    }
}
