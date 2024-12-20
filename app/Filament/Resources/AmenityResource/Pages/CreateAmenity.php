<?php

namespace App\Filament\Resources\AmenityResource\Pages;

use App\Filament\Resources\AmenityResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateAmenity extends CreateRecord
{
    protected static string $resource = AmenityResource::class;

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification {
        return Notification::make()
        ->success()
        ->title('Amenity created')
        ->body('The Amenity has been created successfully.');
    }
}
