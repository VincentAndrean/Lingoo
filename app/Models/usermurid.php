<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usermurid extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama',
        'Umur',
        'Alamat',
        'Telepon',
        'Foto'
    ];
}
