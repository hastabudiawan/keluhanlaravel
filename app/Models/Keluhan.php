<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhan';
    protected $guarded = [];

    protected $fillable = [
        'layanan', 'tglkejadian','namaruangan', 'namaperawat','namadokter', 'rating','isikeluhan', 'nomorwa'
    ];
}
