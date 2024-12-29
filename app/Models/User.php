<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}

class Language extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'schedule', 'capacity'];
}

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'language_id', 'attendance_count', 'progress'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
