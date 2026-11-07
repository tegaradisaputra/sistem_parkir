<?php

namespace App\Filament\Resources\LogAktivitas\Pages;

use App\Filament\Resources\LogAktivitas\LogAktivitasResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateLogAktivitas extends CreateRecord
{
    protected static string $resource = LogAktivitasResource::class;

    #[Override]
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id() ?? 1;
        return $data;
    }
}
