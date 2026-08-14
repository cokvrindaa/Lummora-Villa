<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Andi Pratama',
                'asal' => 'Jakarta, Indonesia',
                'testimoni' => 'Pengalaman yang luar biasa! Villa ini benar-benar memanjakan kami dengan pemandangan indah dan staf yang sangat ramah.',
                'rating' => 5,
            ],
            [
                'nama' => 'Sarah Wijaya',
                'asal' => 'Surabaya, Indonesia',
                'testimoni' => 'Kamarnya bersih dan nyaman, cocok untuk liburan keluarga. Kami pasti akan kembali lagi ke sini.',
                'rating' => 5,
            ],
            [
                'nama' => 'Michael Tan',
                'asal' => 'Singapore',
                'testimoni' => 'Lokasinya tenang dan jauh dari keramaian, sangat pas untuk beristirahat. Pelayanannya juga cepat dan profesional.',
                'rating' => 4,
            ],
            [
                'nama' => 'Dewi Anggraini',
                'asal' => 'Bandung, Indonesia',
                'testimoni' => 'Kolam renang pribadinya jadi favorit anak-anak selama menginap. Sarapan paginya juga enak dan variatif.',
                'rating' => 5,
            ],
            [
                'nama' => 'James Anderson',
                'asal' => 'Sydney, Australia',
                'testimoni' => 'Suite honeymoon-nya romantis banget, pas buat merayakan anniversary. Definitely worth the price.',
                'rating' => 5,
            ],
            [
                'nama' => 'Rina Kusuma',
                'asal' => 'Yogyakarta, Indonesia',
                'testimoni' => 'Villa dengan nuansa tropis yang bikin liburan makin santai. Staf juga sigap membantu kebutuhan kami selama menginap.',
                'rating' => 4,
            ],
        ];

        foreach ($data as $item) {
            Testimoni::create($item);
        }
    }
}