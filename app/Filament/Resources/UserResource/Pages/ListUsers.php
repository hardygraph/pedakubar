<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Models\User;
use Filament\Actions;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->createAnother(false),
        ];
    }

    protected function getTableQuery(): Builder
    {
        return User::where('id', '!=', 1);
    }
}
