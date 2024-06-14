<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\User;
use App\Models\Quiz;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with('user', 'quiz')->get();
        return view('grades.index', compact('grades'));
    }

    public function create()
    {
        $users = User::all();
        $quizzes = Quiz::all();
        return view('grades.create', compact('users', 'quizzes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,user_id',
            'quiz_id' => 'required|exists:quizzes,quiz_id',
            'score' => 'required|integer',
        ]);

        Grade::create($request->all());

        return redirect()->route('grades.index')->with('success', 'Grade created successfully.');
    }

    public function edit(Grade $grade)
    {
        $users = User::all();
        $quizzes = Quiz::all();
        return view('grades.edit', compact('grade', 'users', 'quizzes'));
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'user_id' => 'required|exists:users,user_id',
            'quiz_id' => 'required|exists:quizzes,quiz_id',
            'score' => 'required|integer',
        ]);

        $grade->update($request->all());

        return redirect()->route('grades.index')->with('success', 'Grade updated successfully.');
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('grades.index')->with('success', 'Grade deleted successfully.');
    }
}
