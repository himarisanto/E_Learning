<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::all();
        return response()->json($options);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question_id' => 'required|exists:questions,question_id',
            'option_text' => 'required',
            'is_correct' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $option = Option::create($request->all());
        return response()->json($option, 201);
    }

    public function show($id)
    {
        $option = Option::find($id);
        if (is_null($option)) {
            return response()->json(['message' => 'Option not found'], 404);
        }
        return response()->json($option);
    }

    public function update(Request $request, $id)
    {
        $option = Option::find($id);
        if (is_null($option)) {
            return response()->json(['message' => 'Option not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'question_id' => 'exists:questions,question_id',
            'is_correct' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $option->update($request->all());
        return response()->json($option);
    }

    public function destroy($id)
    {
        $option = Option::find($id);
        if (is_null($option)) {
            return response()->json(['message' => 'Option not found'], 404);
        }

        $option->delete();
        return response()->json(['message' => 'Option deleted successfully']);
    }
}
