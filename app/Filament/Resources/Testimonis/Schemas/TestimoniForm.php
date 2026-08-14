<?php

namespace App\Filament\Resources\Testimonis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;


class TestimoniForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('asal')
                    ->required(),
                Textarea::make('testimoni')
                    ->required()
                    ->columnSpanFull(),
                Select::make('rating')
                    ->label('Rating')
                    ->options([
                        1 => '★',
                        2 => '★★',
                        3 => '★★★',
                        4 => '★★★★',
                        5 => '★★★★★',
                    ])
                    ->default(5)
                    ->required(),
            ]);
    }
}