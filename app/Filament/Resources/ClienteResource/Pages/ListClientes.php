<?php

namespace App\Filament\Resources\ClienteResource\Pages;

use App\Filament\Resources\ClienteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClientes extends ListRecords
{
    protected static string $resource = ClienteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('exportExcel')
                ->label('Exportar Excel')
                ->icon('heroicon-o-arrow-down-tray')
                ->url(route('clientes.export'))
                ->openUrlInNewTab(),
        ];
    }
}
