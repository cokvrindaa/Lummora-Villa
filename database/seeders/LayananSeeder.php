<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Wedding & Event Organizer',
                'deskripsi' => 'Layanan penyelenggaraan pernikahan dan acara khusus dengan dekorasi yang bisa disesuaikan tema tamu.',
                'unggulan' => true,
                'source' => 'eventandwedding.jpg',
            ],
            [
                'judul' => 'Fine Dining Experience',
                'deskripsi' => 'Pengalaman bersantap mewah dengan menu pilihan chef terbaik villa.',
                'unggulan' => true,
                'source' => 'fine-dining.jpg',
            ],
            [
                'judul' => 'Private Dining',
                'deskripsi' => 'Makan malam privat yang disajikan langsung di area villa tamu untuk suasana yang intim.',
                'unggulan' => false,
                'source' => 'priavte-dinning.jpg',
            ],
            [
                'judul' => 'Outdoor Spa Treatment',
                'deskripsi' => 'Perawatan spa di ruang terbuka dikelilingi suasana alam villa.',
                'unggulan' => true,
                'source' => 'outdoor-spa.jpg',
            ],
            [
                'judul' => 'Yoga Class',
                'deskripsi' => 'Kelas yoga pagi di pavilion terbuka dengan pemandangan asri.',
                'unggulan' => false,
                'source' => 'yoga-pavilion.jpg',
            ],
            [
                'judul' => 'City Tour Guide',
                'deskripsi' => 'Layanan pemandu wisata untuk menjelajahi tempat-tempat menarik di sekitar villa.',
                'unggulan' => false,
                'source' => 'touris.jpg',
            ],
        ];
        foreach ($data as $item) {
            $fotoPath = 'layanan-foto/'.$item['source'];

            Storage::disk('public')->put(
                $fotoPath,
                file_get_contents(public_path('image/'.$item['source']))
            );

            Layanan::create([
                'judul' => $item['judul'],
                'deskripsi' => $item['deskripsi'],
                'unggulan' => $item['unggulan'],
                'foto' => $fotoPath,
            ]);
        }
    }
}
