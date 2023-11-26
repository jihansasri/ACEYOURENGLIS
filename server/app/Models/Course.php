<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function mentor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function courseDetails()
    {
        return $this->hasMany(CourseDetail::class);
    }
}
