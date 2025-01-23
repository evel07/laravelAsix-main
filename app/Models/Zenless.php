<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zenless extends Model
{
    use HasFactory;
    protected $table = "zenless";

    protected $fillable = [
        'name', 'class', 'abilities', 'age', 'role'
    ];
}


