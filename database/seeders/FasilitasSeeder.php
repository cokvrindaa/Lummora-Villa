<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Executive Lounge',
                'deskripsi' => 'Ruang lounge eksklusif dengan WiFi cepat untuk tamu yang membutuhkan tempat kerja atau pertemuan santai.',
                'source' => 'ceo.jpg',
            ],
            [
                'judul' => 'Garden Lounge',
                'deskripsi' => 'Area lounge outdoor yang dikelilingi taman hijau, cocok untuk bersantai sambil menikmati udara segar.',
                'source' => 'garden-lounge.jpg',
            ],
            [
                'judul' => 'Area Utama Villa',
                'deskripsi' => 'Area penyambutan utama yang menjadi pusat aktivitas tamu selama menginap.',
                'source' => 'hero.jpg',
            ],
            [
                'judul' => 'Resepsionis 24 Jam',
                'deskripsi' => 'Layanan resepsionis yang siap membantu kebutuhan tamu kapan saja selama masa menginap.',
                'source' => 'layanan.webp',
            ],
            [
                'judul' => 'View Point',
                'deskripsi' => 'Titik pandang terbaik di area villa untuk menikmati pemandangan sekitar.',
                'source' => 'much-villa.jpg',
            ],
            [
                'judul' => 'Spa & Wellness Center',
                'deskripsi' => 'Pusat perawatan tubuh lengkap dengan berbagai pilihan terapi relaksasi.',
                'source' => 'spa.jpg',
            ],
        ];

        foreach ($data as $item) {
            $fotoPath = 'fasilitas-foto/'.$item['source'];

            Storage::disk('public')->put(
                $fotoPath,
                file_get_contents(public_path('image/'.$item['source']))
            );

            Fasilitas::create([
                'judul' => $item['judul'],
                'deskripsi' => $item['deskripsi'],
                'foto' => $fotoPath,
            ]);
        }
    }
}
