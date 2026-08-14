<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'pertanyaan' => 'Bagaimana cara melakukan reservasi kamar?',
                'jawaban' => 'Reservasi bisa dilakukan melalui tombol WhatsApp yang tersedia di setiap kartu kamar pada halaman utama. Tim kami akan segera merespon dan membantu proses pemesanan sesuai tanggal yang diinginkan. Pastikan untuk menyertakan nama kamar dan tanggal menginap agar prosesnya lebih cepat.',
                'urutan' => 1,
            ],
            [
                'pertanyaan' => 'Apakah tersedia layanan antar jemput bandara?',
                'jawaban' => 'Ya, villa menyediakan layanan antar jemput bandara dengan biaya tambahan yang disesuaikan dengan jarak tempuh. Layanan ini dapat dipesan bersamaan dengan reservasi kamar melalui WhatsApp. Mohon informasikan jadwal penerbangan agar penjemputan berjalan tepat waktu.',
                'urutan' => 2,
            ],
            [
                'pertanyaan' => 'Jam berapa waktu check-in dan check-out?',
                'jawaban' => 'Check-in dimulai pukul 14.00 waktu setempat dan check-out paling lambat pukul 12.00 siang. Permintaan early check-in atau late check-out dapat diajukan namun tergantung ketersediaan kamar. Sebaiknya hubungi tim kami terlebih dahulu jika membutuhkan penyesuaian waktu.',
                'urutan' => 3,
            ],
            [
                'pertanyaan' => 'Apakah bisa membawa hewan peliharaan?',
                'jawaban' => 'Untuk saat ini villa belum mengizinkan tamu membawa hewan peliharaan selama masa menginap. Kebijakan ini diterapkan demi kenyamanan seluruh tamu yang menginap. Kami mohon pengertian dan kerja samanya terkait aturan ini.',
                'urutan' => 4,
            ],
            [
                'pertanyaan' => 'Apakah tersedia sarapan pagi?',
                'jawaban' => 'Sarapan pagi sudah termasuk dalam harga sewa kamar untuk semua tipe villa yang tersedia. Menu sarapan disajikan setiap hari dengan pilihan menu lokal dan internasional. Waktu penyajian sarapan biasanya dimulai pukul 07.00 hingga 10.00 pagi.',
                'urutan' => 5,
            ],
            [
                'pertanyaan' => 'Bagaimana kebijakan pembatalan reservasi?',
                'jawaban' => 'Pembatalan dapat dilakukan maksimal 3 hari sebelum tanggal check-in tanpa dikenakan biaya tambahan. Pembatalan yang dilakukan kurang dari 3 hari akan dikenakan potongan sesuai kebijakan yang berlaku. Untuk proses pembatalan, tamu dapat menghubungi tim kami langsung melalui WhatsApp.',
                'urutan' => 6,
            ],
            [
                'pertanyaan' => 'Apakah villa menyediakan fasilitas kolam renang pribadi?',
                'jawaban' => 'Beberapa tipe kamar seperti Deluxe Villa dan Private Villa dilengkapi dengan kolam renang pribadi. Fasilitas ini bisa dilihat detailnya pada bagian fasilitas di masing-masing kamar. Tamu yang menginginkan kolam pribadi disarankan memilih tipe kamar tersebut saat reservasi.',
                'urutan' => 7,
            ],
            [
                'pertanyaan' => 'Metode pembayaran apa saja yang bisa digunakan?',
                'jawaban' => 'Pembayaran dapat dilakukan melalui transfer bank maupun dompet digital yang telah bekerja sama dengan villa. Detail rekening dan metode pembayaran akan diinformasikan oleh tim kami saat proses reservasi berlangsung. Bukti pembayaran mohon dikirimkan kembali untuk konfirmasi reservasi.',
                'urutan' => 8,
            ],
        ];

        foreach ($data as $item) {
            Faq::create($item);
        }
    }
}