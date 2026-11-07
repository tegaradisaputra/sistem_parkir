<?php

namespace App\Filament\Resources\Kendaraans\Schemas;

use App\Models\Kendaraan;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class KendaraanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('plat_nomor'),
                TextEntry::make('jenis_kendaraan'),
                TextEntry::make('warna'),
                TextEntry::make('pemilik'),
                TextEntry::make('user.id')
                    ->label('User'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Kendaraan $record): bool => $record->trashed()),
            ]);
    }
}
