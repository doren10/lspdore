<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    function Penduduk()
    {
        return $this->belongsTo(Aspirasi::class, 'nik');
    }

    function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) => 
            $query->where('nik', 'like', '%' . $search . '%')
            ->orWhere('lokasi', 'like', '%' . $search . '%')
            ->orWhere('keterangan', 'like', '%' . $search . '%')
        );
    }
}
