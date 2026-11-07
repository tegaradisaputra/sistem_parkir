<?php

namespace App\Filament\Resources\Tarifs\Schemas;

use App\Models\Tarif;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TarifInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('jenis_kendaraan')
                    ->badge(),
                TextEntry::make('tarif_per_jam')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Tarif $record): bool => $record->trashed()),
            ]);
    }
}
