<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'grade_numeric',
        'grade_verbal',
        'grade_logical',
        'result'
    ];
}
