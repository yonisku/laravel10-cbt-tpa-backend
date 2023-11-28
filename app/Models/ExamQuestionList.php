<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestionList extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id',
        'question_id',
        'isTrue'
    ];
}
