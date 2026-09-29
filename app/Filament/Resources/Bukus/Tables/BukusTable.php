<?php

namespace App\Filament\Resources\Bukus\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BukusTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_buku')
                    ->label('Kode Buku')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('penulis')
                    ->label('Penulis Buku')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('penerbit')
                    ->label('Penerbit Buku')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('tahun_terbit')
                    ->label('Tahun Terbit Buku')
                    ->sortable(),

                TextColumn::make('stok')
                    ->label('Stok Buku')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}