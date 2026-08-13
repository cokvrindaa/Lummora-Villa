<?php

namespace App\Http\Controllers;

use App\Models\Kamar;

class LandingController extends Controller
{
    public function index()
    {
        // Untuk mengambil data dari hasil crud oleh filamment
        $kamars = Kamar::all(); // ambil semua kamar, UI akan handle status

        // data tersebut bawa ke index
        return view('index', compact('kamars'));
    }
}