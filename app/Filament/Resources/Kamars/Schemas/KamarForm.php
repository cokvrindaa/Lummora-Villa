<?php

namespace App\Filament\Resources\Kamars\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Laravel\Pail\Options;

class KamarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_kamar')
                    ->required(),
                Select::make('tipe_kamar')
                    ->required()
                    ->options([
                        'Villa Eksklusif' => 'Villa Eksklusif',
                        'Suite Premium' => 'Suite Premium',
                        'Kamar Superior' => 'Kamar Superior',
                        'Villa Romantis' => 'Villa Romantis',
                        'Suite Keluarga' => 'Suite Keluarga',
                        'Bungalow Tradisional' => 'Bungalow Tradisional',
                    ]),
                TextInput::make('kamar_tersedia')
                    ->label('Ketersediaan Kamar')
                    ->numeric()
                    ->default(0)
                    ->required(),
                TextInput::make('harga')
                    ->required()
                    ->numeric(),
                Select::make('fasilitas')
                    ->multiple()
                    ->options([
                        'AC' => 'AC',
                        'WiFi' => 'WiFi',
                        'Kolam Pribadi' => 'Kolam Pribadi',
                        '1 King Bed' => '1 King Bed',
                        'Bathtub' => 'Bathtub',
                        'Balkon Pribadi' => 'Balkon Pribadi',
                        'Sarapan Termasuk' => 'Sarapan Termasuk',
                    ])
                    ->searchable()
                    ->required()
                    ->formatStateUsing(fn ($state) => is_string($state) ? explode(',', $state) : $state)
                    ->dehydrateStateUsing(fn ($state) => is_array($state) ? implode(',', $state) : $state),
                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Select::make('periode')
                    ->required()
                    ->options([
                        'malam' => '1 Malam',
                        'minggu' => '1 Minggu',
                        'bulan' => '1 Bulan',
                    ]),
                FileUpload::make('foto')
                    ->label('Foto Kamar')
                    ->image()
                    ->disk('public')
                    ->directory('kamar-foto')
                    ->required(),
            ]);
    }
}