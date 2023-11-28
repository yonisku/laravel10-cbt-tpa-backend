<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamQuestionList;
use App\Models\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // Create Exam
    public function createExam(Request $request)
    {
        // Get 20 Numeric Exam Random
        $numericQuestion = Question::where('category', 'numeric')->inRandomOrder()->limit(20)->get();
        // Get 20 Verbal Exam Random
        $verbalQuestion = Question::where('category', 'verbal')->inRandomOrder()->limit(20)->get();
        // Get 20 Logical Exam Random
        $logicalQuestion = Question::where('category', 'logical')->inRandomOrder()->limit(20)->get();

        $exam = Exam::create([
            'user_id' => $request->user()->id
        ]);

        foreach ($numericQuestion as $question) {
            ExamQuestionList::create([
                'exam_id' => $exam->id,
                'question_id' => $question->id,
            ]);
        }

        foreach ($verbalQuestion as $question) {
            ExamQuestionList::create([
                'exam_id' => $exam->id,
                'question_id' => $question->id,
            ]);
        }

        foreach ($logicalQuestion as $question) {
            ExamQuestionList::create([
                'exam_id' => $exam->id,
                'question_id' => $question->id,
            ]);
        }

        return response()->json([
            'message' => 'Exam has successfully created',
            'data' => $exam,
        ]);
    }
}
