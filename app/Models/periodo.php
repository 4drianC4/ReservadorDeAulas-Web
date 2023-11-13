<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class periodo extends Model
{
    use HasFactory;

    protected $fillable = [
        'horario',
    ];

    public function reservas()
    {
        return $this->belongsToMany('App\Models\reservador');
    }
}
