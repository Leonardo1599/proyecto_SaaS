<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'cliente_id',
        'tipo',
        'status',
        'monto',
        'moneda',
        'external_id',
        'detalles',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
