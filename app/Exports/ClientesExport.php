<?php

namespace App\Exports;

use App\Models\Models\Cliente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ClientesExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Cliente::with('contactos')->get();
    }

    public function map($cliente): array
    {
        $contactos = $cliente->contactos->map(function($contacto) {
            return $contacto->nombre . ' (' . $contacto->email . ')';
        })->implode('; ');

        return [
            $cliente->id,
            $cliente->nombre,
            $cliente->email,
            $cliente->telefono,
            $contactos,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'Email',
            'Teléfono',
            'Contactos',
        ];
    }
}
