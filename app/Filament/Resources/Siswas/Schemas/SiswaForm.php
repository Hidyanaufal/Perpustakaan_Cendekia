<?php

namespace App\Filament\Resources\Siswas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nis')
                    ->label('NIS')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                TextInput::make('nama')
                    ->label('Nama Siswa')
                    ->required()
                    ->maxLength(255),

                TextInput::make('kelas')
                    ->label('Kelas')
                    ->required()
                    ->maxLength(255),

                Textarea::make('alamat')
                    ->label('Alamat')
                    ->rows(3),

                TextInput::make('no_telp')
                    ->label('No. Telepon')
                    ->tel()
                    ->maxLength(255),
            ]);
    }
}