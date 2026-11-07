<?php

namespace App\Filament\Resources\AreaParkirs\Schemas;

use App\Models\AreaParkir;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AreaParkirInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama_area'),
                TextEntry::make('kapasitas')
                    ->numeric(),
                TextEntry::make('terisi')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (AreaParkir $record): bool => $record->trashed()),
            ]);
    }
}
