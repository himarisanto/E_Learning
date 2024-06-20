<?php


namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,category_id',
            'created_by' => 'required|exists:users,user_id',
        ]);

        $course = Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }

    public function show($id)
    {
        $course = Course::find($id);
        if (is_null($course)) {
            return redirect()->route('courses.index')->with('error', 'Course not found');
        }
        return view('courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::find($id);
        if (is_null($course)) {
            return redirect()->route('courses.index')->with('error', 'Course not found');
        }
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        if (is_null($course)) {
            return redirect()->route('courses.index')->with('error', 'Course not found');
        }

        $request->validate([
            'category_id' => 'exists:categories,category_id',
            'created_by' => 'exists:users,user_id',
        ]);

        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        if (is_null($course)) {
            return redirect()->route('courses.index')->with('error', 'Course not found');
        }

        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
