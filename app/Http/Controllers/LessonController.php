<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();
        return response()->json($lessons);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_id' => 'required|exists:courses,course_id',
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $lesson = Lesson::create($request->all());
        return response()->json($lesson, 201);
    }

    public function show($id)
    {
        $lesson = Lesson::find($id);
        if (is_null($lesson)) {
            return response()->json(['message' => 'Lesson not found'], 404);
        }
        return response()->json($lesson);
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        if (is_null($lesson)) {
            return response()->json(['message' => 'Lesson not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'course_id' => 'exists:courses,course_id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $lesson->update($request->all());
        return response()->json($lesson);
    }

    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        if (is_null($lesson)) {
            return response()->json(['message' => 'Lesson not found'], 404);
        }

        $lesson->delete();
        return response()->json(['message' => 'Lesson deleted successfully']);
    }
}
