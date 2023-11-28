<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservador extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'fechaReserva',
        'descripcionReserva',
        'ambiente_id',
    ];

    public function ambiente()
    {
        return $this->belongsTo('App\Models\ambiente');
    }

    public function periodo()
    {
        return $this->belongsToMany(periodo::class, 'periodo_reservador', 'reservador_id', 'periodo_id');
    }
}
