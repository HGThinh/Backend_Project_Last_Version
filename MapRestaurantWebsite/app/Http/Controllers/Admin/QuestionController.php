<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionStoreRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $questions = Question::all();
        return view('admin.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionStoreRequest $request)
    {
        //
        Question::create([
            'name' => $request->name,
            'email' => $request->email,
            'question' => $request->question,
        ]);

        return to_route('admin.questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
        return view('admin.questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuestionStoreRequest $request, Question $question)
    {
        //
        $question->update($request->validated());
        return to_route('admin.questions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
        $question->delete();
        return to_route('admin.questions.index');
    }
}
