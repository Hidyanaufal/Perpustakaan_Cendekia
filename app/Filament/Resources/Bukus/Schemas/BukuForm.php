<?php

namespace App\Filament\Resources\Bukus\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BukuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_buku')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('judul')
                    ->required(),

                TextInput::make('penulis')
                    ->required(),

                TextInput::make('penerbit')
                    ->required(),

                TextInput::make('tahun_terbit')
                    ->numeric()
                    ->required(),

                TextInput::make('stok')
                    ->numeric()
                    ->default(0)
                    ->required(),
            ]);
    }
}