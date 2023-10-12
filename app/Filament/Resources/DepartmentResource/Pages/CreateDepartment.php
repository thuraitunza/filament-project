<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use App\Filament\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Department Created';
    }

    protected function getCreatedNotification():?Notification
    {
        return Notification::make()
                ->success()
                ->title('Department Created')
                ->body('This department has been created successfully.');
    }
}
