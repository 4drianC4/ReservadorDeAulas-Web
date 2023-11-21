<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class periodo extends Model
{
    use HasFactory;

    protected $fillable = [
        'horarioInicio',
        'horarioFin',
    ];

    public function reservador()
    {
        return $this->belongsToMany(reservador::class, 'periodo_reservador', 'periodo_id', 'reservador_id');
    }
}
