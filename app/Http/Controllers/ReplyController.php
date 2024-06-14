<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'discussion_id' => 'required|exists:discussions,discussion_id',
            'user_id' => 'required|exists:users,user_id',
            'content' => 'required|string',
        ]);

        Reply::create($request->all());

        return redirect()->route('discussions.show', $request->discussion_id)->with('success', 'Reply added successfully.');
    }

    public function edit(Reply $reply)
    {
        // Jika Anda memiliki data users yang ingin ditampilkan dalam form, Anda dapat mengambilnya di sini.
        // Misalnya:
        // $users = User::all();
        // return view('replies.edit', compact('reply', 'users'));

        return view('replies.edit', compact('reply'));
    }

    public function update(Request $request, Reply $reply)
    {
        $request->validate([
            'discussion_id' => 'required|exists:discussions,discussion_id',
            'user_id' => 'required|exists:users,user_id',
            'content' => 'required|string',
        ]);

        $reply->update($request->all());

        return redirect()->route('discussions.show', $request->discussion_id)->with('success', 'Reply updated successfully.');
    }

    public function destroy(Reply $reply)
    {
        $discussion_id = $reply->discussion_id;
        $reply->delete();
        return redirect()->route('discussions.show', $discussion_id)->with('success', 'Reply deleted successfully.');
    }
}
