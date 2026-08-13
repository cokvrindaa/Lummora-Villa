<?php

namespace Database\Seeders;

use App\Models\Kamar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class KamarSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_kamar' => 'Deluxe Villa',
                'tipe_kamar' => 'Deluxe',
                'harga' => 750000,
                'fasilitas' => 'AC,WiFi,Kolam Pribadi',
                'deskripsi' => 'Villa deluxe modern dengan kolam renang pribadi dan area duduk outdoor untuk bersantai.',
                'periode' => 'Per malam',
                'kamar_tersedia' => 4,
                'source' => 'deluxe-villa.jpg',
            ],
            [
                'nama_kamar' => 'Honeymoon Suite',
                'tipe_kamar' => 'Suite',
                'harga' => 1200000,
                'fasilitas' => '1 King Bed,Bathtub,Balkon Pribadi',
                'deskripsi' => 'Suite romantis untuk pasangan berbulan madu dengan bathtub mewah dan balkon pribadi.',
                'periode' => 'Per malam',
                'kamar_tersedia' => 2,
                'source' => 'honey-moon.jpg',
            ],
            [
                'nama_kamar' => 'Family Villa',
                'tipe_kamar' => 'Family',
                'harga' => 1500000,
                'fasilitas' => '2 Bedroom,Dapur Mini,Ruang Keluarga',
                'deskripsi' => 'Villa luas dengan dua kamar tidur dan ruang keluarga yang nyaman untuk liburan bersama.',
                'periode' => 'Per malam',
                'kamar_tersedia' => 3,
                'source' => 'fammily.jpg',
            ],
            [
                'nama_kamar' => 'Pool View Room',
                'tipe_kamar' => 'Deluxe',
                'harga' => 850000,
                'fasilitas' => 'AC,WiFi,Balkon',
                'deskripsi' => 'Kamar dengan pemandangan langsung ke kolam renang utama dan interior minimalis yang nyaman.',
                'periode' => 'Per malam',
                'kamar_tersedia' => 5,
                'source' => 'pool-view.jpg',
            ],
            [
                'nama_kamar' => 'Private Villa',
                'tipe_kamar' => 'Villa',
                'harga' => 2000000,
                'fasilitas' => 'Kolam Pribadi,Dapur,Ruang Tamu',
                'deskripsi' => 'Villa privat dengan akses eksklusif tanpa berbagi fasilitas dengan tamu lain.',
                'periode' => 'Per malam',
                'kamar_tersedia' => 2,
                'source' => 'private-villa.jpg',
            ],
            [
                'nama_kamar' => 'Tropical Villa',
                'tipe_kamar' => 'Villa',
                'harga' => 1100000,
                'fasilitas' => 'AC,WiFi,Taman Pribadi',
                'deskripsi' => 'Villa bernuansa tropis dikelilingi taman hijau asri untuk suasana menginap yang alami.',
                'periode' => 'Per malam',
                'kamar_tersedia' => 4,
                'source' => 'tropical.jpg',
            ],
        ];

        foreach ($data as $item) {
            $fotoPath = 'kamar-foto/'.$item['source'];

            Storage::disk('public')->put(
                $fotoPath,
                file_get_contents(public_path('image/'.$item['source']))
            );

            Kamar::create([
                'nama_kamar' => $item['nama_kamar'],
                'tipe_kamar' => $item['tipe_kamar'],
                'harga' => $item['harga'],
                'fasilitas' => $item['fasilitas'],
                'deskripsi' => $item['deskripsi'],
                'periode' => $item['periode'],
                'kamar_tersedia' => $item['kamar_tersedia'],
                'foto' => $fotoPath,
            ]);
        }
    }
}
