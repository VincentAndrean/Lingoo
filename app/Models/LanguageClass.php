<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageClass extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'subject', 'date', 'start_time', 'end_time', 'icon'];
}
