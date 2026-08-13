<?php

namespace App\Filament\Resources\Fasilitas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class FasilitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                TextInput::make('deskripsi')
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