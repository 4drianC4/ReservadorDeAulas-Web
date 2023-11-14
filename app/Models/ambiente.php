<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ambiente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreAmbiente',
        'capacidadAmbiente',
        'descripcionAmbiente',
        'facilidad_id',
    ];

    public function facilidades()
    {
        return $this->belongsToMany('App\Models\facilidad');
    }
}
