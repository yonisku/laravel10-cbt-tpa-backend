<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionStoreRequest;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::query()
            ->when($request->q, function ($query, $search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
            })
            ->orderBy('id', 'asc')
            ->paginate(5);
        return view('pages.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.question.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionStoreRequest $request)
    {
        $data = $request->validated();
        Question::create($data);

        Session::flash('message', ['Well Done!', 'Question has been successfully created!']);
        return to_route('question.index');
    }
}
