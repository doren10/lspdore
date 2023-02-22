<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    function Aspirasi()
    {
        return $this->hasMany(Aspirasi::class);
    }
}
