<?php

namespace App\Http\Controllers;

use App\Models\Kamar;

class LandingController extends Controller
{
    public function index()
    {
        // Untuk mengambil data dari hasil crud oleh filamment
        $kamars = Kamar::where('kamar_tersedia', '>', 0)->get();

        // data tersebut bawa ke index
        return view('index', compact('kamars'));
    }
}