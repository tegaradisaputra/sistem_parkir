<?php

namespace App\Filament\Resources\LogAktivitas\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LogAktivitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('aktivitas')
                    ->required(),
                DateTimePicker::make('waktu_aktivitas')
                    ->required(),
            ]);
    }
}
