<?php

namespace App\Filament\Resources\Kendaraans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KendaraanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('plat_nomor')
                    ->required(),
                TextInput::make('jenis_kendaraan')
                    ->required(),
                TextInput::make('warna')
                    ->required(),
                TextInput::make('pemilik')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
            ]);
    }
}
