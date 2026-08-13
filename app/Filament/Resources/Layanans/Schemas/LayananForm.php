<?php

namespace App\Filament\Resources\Layanans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class LayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                TextInput::make('deskripsi')
                    ->required(),
                Toggle::make('unggulan')
                    ->required(),
                FileUpload::make('foto')
                    ->label('Foto Kamar')
                    ->image()
                    ->disk('public')
                    ->directory('kamar-foto')
                    ->required(),
            ]);
    }
}