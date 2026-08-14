<?php

namespace App\Filament\Resources\SocialMedia\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SocialMediaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('whatsapp')
                    ->label('WhatsApp')
                    ->url()
                    ->placeholder('contoh : https://wa.me/62889231231'),

                TextInput::make('instagram')
                    ->label('Instagram')
                    ->url()
                    ->placeholder('conoth : https://instagram.com/lummora'),

                TextInput::make('facebook')
                    ->label('Facebook')
                    ->url()
                    ->placeholder('contoh : https://facebook.com/lummora'),

                TextInput::make('tiktok')
                    ->label('TikTok')
                    ->url()
                    ->placeholder('contoh : https://tiktok.com/@lummora'),

                TextInput::make('youtube')
                    ->label('YouTube')
                    ->url()
                    ->placeholder('contoh : https://www.youtube.com/@neptiver'),
            ]);
    }
}