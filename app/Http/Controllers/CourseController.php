<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,category_id',
            'created_by' => 'required|exists:users,user_id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $course = Course::create($request->all());
        return response()->json($course, 201);
    }

    public function show($id)
    {
        $course = Course::find($id);
        if (is_null($course)) {
            return response()->json(['message' => 'Course not found'], 404);
        }
        return response()->json($course);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        if (is_null($course)) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'category_id' => 'exists:categories,category_id',
            'created_by' => 'exists:users,user_id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $course->update($request->all());
        return response()->json($course);
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        if (is_null($course)) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $course->delete();
        return response()->json(['message' => 'Course deleted successfully']);
    }
}
