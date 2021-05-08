<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;
    protected $table = 'students_marks';
    public $timestamps = true;
    public function student_mark()
    {
    	return $this->belongsTo(Student::class,'student');
    }
}
