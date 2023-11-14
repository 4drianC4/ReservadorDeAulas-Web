<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facilidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreFacilidad',
        'descripcionFacilidad',
    ];

    public function ambientes()
    {
        return $this->belongsToMany('App\Models\ambiente');
    }
}
