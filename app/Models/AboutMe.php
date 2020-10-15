<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
        'email',
        'phone',
        'about_me_short',
        'about_me_long',
        'gender',
        'marital_status',
        'nationality',
        'dob',
        'photo',
        'status'
    ];
}
