<?php

namespace App\Filament\Resources\DetailPeminjamen;

use App\Filament\Resources\DetailPeminjamen\Pages\CreateDetailPeminjaman;
use App\Filament\Resources\DetailPeminjamen\Pages\EditDetailPeminjaman;
use App\Filament\Resources\DetailPeminjamen\Pages\ListDetailPeminjamen;
use App\Filament\Resources\DetailPeminjamen\Schemas\DetailPeminjamanForm;
use App\Filament\Resources\DetailPeminjamen\Tables\DetailPeminjamenTable;
use App\Models\DetailPeminjaman;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DetailPeminjamanResource extends Resource
{
    protected static ?string $model = DetailPeminjaman::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'detail_peminjaman';

    public static function form(Schema $schema): Schema
    {
        return DetailPeminjamanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DetailPeminjamenTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDetailPeminjamen::route('/'),
            'create' => CreateDetailPeminjaman::route('/create'),
            'edit' => EditDetailPeminjaman::route('/{record}/edit'),
        ];
    }
}
