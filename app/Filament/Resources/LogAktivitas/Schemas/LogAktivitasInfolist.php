<?php

namespace App\Filament\Resources\LogAktivitas\Schemas;

use App\Models\LogAktivitas;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LogAktivitasInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user.name')
                    ->label('User'),
                TextEntry::make('aktivitas'),
                TextEntry::make('waktu_aktivitas')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (LogAktivitas $record): bool => $record->trashed()),
            ]);
    }
}
