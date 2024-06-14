<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function index()
    {
        $discussions = Discussion::with('course', 'user')->latest()->paginate(10);
        return view('discussions.index', compact('discussions'));
    }

    public function create()
    {
        // Jika Anda memiliki data courses atau users yang ingin ditampilkan dalam form, Anda dapat mengambilnya di sini.
        // Misalnya:
        // $courses = Course::all();
        // $users = User::all();
        // return view('discussions.create', compact('courses', 'users'));

        return view('discussions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,course_id',
            'user_id' => 'required|exists:users,user_id',
            'title' => 'required|string|max:100',
            'content' => 'required|string',
        ]);

        Discussion::create($request->all());

        return redirect()->route('discussions.index')->with('success', 'Discussion created successfully.');
    }

    public function show(Discussion $discussion)
    {
        $discussion->load('course', 'user', 'replies.user'); // Load the relations with eager loading
        return view('discussions.show', compact('discussion'));
    }

    public function edit(Discussion $discussion)
    {
        // Jika Anda memiliki data courses atau users yang ingin ditampilkan dalam form, Anda dapat mengambilnya di sini.
        // Misalnya:
        // $courses = Course::all();
        // $users = User::all();
        // return view('discussions.edit', compact('discussion', 'courses', 'users'));

        return view('discussions.edit', compact('discussion'));
    }

    public function update(Request $request, Discussion $discussion)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,course_id',
            'user_id' => 'required|exists:users,user_id',
            'title' => 'required|string|max:100',
            'content' => 'required|string',
        ]);

        $discussion->update($request->all());

        return redirect()->route('discussions.index')->with('success', 'Discussion updated successfully.');
    }

    public function destroy(Discussion $discussion)
    {
        $discussion->delete();
        return redirect()->route('discussions.index')->with('success', 'Discussion deleted successfully.');
    }
}
