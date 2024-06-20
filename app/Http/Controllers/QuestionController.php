<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'quiz_id' => 'required|exists:quizzes,quiz_id',
            'question_text' => 'required',
            'question_type' => 'required|in:multiple_choice,true_false,short_answer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $question = Question::create($request->all());
        return response()->json($question, 201);
    }

    public function show($id)
    {
        $question = Question::find($id);
        if (is_null($question)) {
            return response()->json(['message' => 'Question not found'], 404);
        }
        return response()->json($question);
    }

    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        if (is_null($question)) {
            return response()->json(['message' => 'Question not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'quiz_id' => 'exists:quizzes,quiz_id',
            'question_type' => 'in:multiple_choice,true_false,short_answer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $question->update($request->all());
        return response()->json($question);
    }

    public function destroy($id)
    {
        $question = Question::find($id);
        if (is_null($question)) {
            return response()->json(['message' => 'Question not found'], 404);
        }

        $question->delete();
        return response()->json(['message' => 'Question deleted successfully']);
    }
}
