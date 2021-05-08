<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = true;
    use HasFactory;
    /*function marks()
    {
    return $this->hasMany(Marks::class);
    }*/
}
