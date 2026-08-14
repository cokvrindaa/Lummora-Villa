<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Layanan;
use App\Models\Fasilitas;
use App\Models\Faq;
use App\Models\Testimoni;
use App\Models\SocialMedia;

class LandingController extends Controller
{
    public function index()
    {
        // Untuk mengambil data dari hasil crud oleh filamment
        $kamars = Kamar::all(); // ambil semua kamar, UI akan handle status
        $layanans = Layanan::all();
        $fasilitas = Fasilitas::all();
        $faqs = Faq::orderBy('urutan')->get();
        $testimonis = Testimoni::latest()->get();
        $socialMedia = SocialMedia::first();

        // data tersebut bawa ke index
        return view('index', compact('kamars', 'layanans', 'fasilitas', 'faqs', 'testimonis', 'socialMedia'));
    }
}