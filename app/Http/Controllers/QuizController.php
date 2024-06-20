<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('quizzes.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_id' => 'required|exists:courses,id',
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Quiz::create($request->all());

        return redirect()->route('quizzes.index')->with('success', 'Quiz created successfully');
    }

    public function show($id)
    {
        $quiz = Quiz::find($id);
        if (is_null($quiz)) {
            return redirect()->route('quizzes.index')->with('error', 'Quiz not found');
        }
        return view('quizzes.show', compact('quiz'));
    }

    public function edit($id)
    {
        $quiz = Quiz::find($id);
        if (is_null($quiz)) {
            return redirect()->route('quizzes.index')->with('error', 'Quiz not found');
        }
        return view('quizzes.edit', compact('quiz'));
    }

    public function update(Request $request, $id)
    {
        $quiz = Quiz::find($id);
        if (is_null($quiz)) {
            return redirect()->route('quizzes.index')->with('error', 'Quiz not found');
        }

        $validator = Validator::make($request->all(), [
            'course_id' => 'required|exists:courses,id',
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $quiz->update($request->all());

        return redirect()->route('quizzes.index')->with('success', 'Quiz updated successfully');
    }

    public function destroy($id)
    {
        $quiz = Quiz::find($id);
        if (is_null($quiz)) {
            return redirect()->route('quizzes.index')->with('error', 'Quiz not found');
        }

        $quiz->delete();

        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted successfully');
    }
}
