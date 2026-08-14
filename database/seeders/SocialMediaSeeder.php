<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    public function run(): void
    {
        SocialMedia::create([
            'whatsapp' => 'https://wa.me/6212345678',
            'instagram' => 'https://instagram.com/lummora',
            'facebook' => 'https://facebook.com/lummora',
            'tiktok' => 'https://tiktok.com/@lummora',
            'youtube' => 'https://www.youtube.com/@neptiver',
        ]);
    }
}