<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Task;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => ['required'],
        ]);

        $task_id = $request->task_id;
        Comment::create([
            'task_id' => $task_id,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.show', $task_id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => ['required'],
        ]);

        $comment = Comment::find($id);
        $comment->update($request->all());

        $task_id = $comment->task_id;
        return redirect()->route('tasks.show', $task_id);
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $task_id = $comment->task_id;
        $comment->delete();
        return redirect()->route('tasks.show', $task_id);
    }
}
