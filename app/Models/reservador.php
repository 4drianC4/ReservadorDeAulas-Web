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

    public function periodos()
    {
        return $this->belongsToMany('App\Models\periodo');
    }
}
