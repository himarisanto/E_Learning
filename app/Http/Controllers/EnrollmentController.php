<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollment = Enrollment::with('user', 'course')->get();
        return view('enrollments.index', compact('enrollments'));
    }
    public function create()
    {
        $users = User::all();
        $courses = Course::all();
        return view('enrollments.create', compact('users', 'courses'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,useri_id',
            'course_id' => 'required|exists:course,course_id',
            'anrolled_ad' => 'required|date',
        ]);
        Enrollment::create($request->all());
        return redirect()->route('enrollments.index')->with('succes', 'Enrollment Created');
    }

    public function show(Enrollment $request)
    {
        return view('enrollments.show', compact('enrollment'));
    }
    public function edit(Enrollment $enrollment)
    {

        $users = User::all();
        $courses = Course::all();
        return view('enrollments.edit', compact('users', 'courses'));
    }
    public function update(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'user_id' => 'required|exists:users,useri_id',
            'course_id' => 'required|exists:course,course_id',
            'anrolled_ad' => 'required|date',
        ]);
        $enrollment->update($request->all());
        return redirect()->route('enrollments.index')->with('succes', 'Enrollment Update');
    }
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->route('enrollments.index')->with('succes', 'Enrollment deleted');
    }
}
