<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Exam;
use App\Models\ExamQuestionList;
use App\Models\Question;
use App\Models\User;
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

        // Create Exam
        $exam = Exam::create([
            'user_id' => $request->user()->id
        ]);

        // Create Exam Question List
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

    // Get Question List By Category
    public function getQuestionListByCategory(Request $request)
    {
        // Get user_id of Exam
        $exam = Exam::where('user_id', $request->user()->id)->first();
        // Get exam_id of Exam Question List
        $examQuestionList = ExamQuestionList::where('exam_id', $exam->id)->get();
        // Get question_id of Exam Question List
        $questionIds = $examQuestionList->pluck('question_id');

        $question = Question::whereIn('id', $questionIds)
            ->where('category', $request->category)
            ->get();

        if (count($question) > 0) {
            return response()->json([
                'message' => 'successfully fetched questions list by category.',
                'data' => QuestionResource::collection($question),
            ], 201);
        } else {
            return response()->json([
                'message' => 'questions not found.',
            ], 404);
        }
    }

    public function answerTheQuestion(Request $request)
    {
        $validatedData = $request->validate([
            'question_id' => 'required',
            'answer' => 'required',
        ]);

        // Get user_id of Exam
        $exam = Exam::where('user_id', $request->user()->id)->first();
        // Get exam_id of Exam
        $examQuestionList = ExamQuestionList::where('exam_id', $exam->id)
            ->where('question_id', $validatedData['question_id'])->first();
        // Get question_id of Exam
        $question = Question::where('id', $validatedData['question_id'])->first();

        // Check the Answer 
        if ($question->answer_key == $validatedData['answer']) {
            $examQuestionList->update([
                'isTrue' => true,
            ]);
        } else {
            $examQuestionList->update([
                'isTrue' => false,
            ]);
        }

        return response()->json([
            'message' => 'Successfully saved the answer',
            'answer' => $examQuestionList->isTrue,
        ], 201);
    }
}
