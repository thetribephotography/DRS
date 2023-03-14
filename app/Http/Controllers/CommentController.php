<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Support\Facades\Session;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created comment in storage.
     *
     */
    public function store(Request $request, $id)
    {
        //
        // $this->authorize("", "You cannot perform this action");
        $request->validate([
            'comment' => 'required',
        ]);

        $user_id = Auth::id();
        $comment = $request->comment;
        $status = 1;

        $upload = Upload::find($id);

        $new_comment = new Comment;
        $new_comment->user_id = $user_id;
        $new_comment->upload_id = $id;
        $new_comment->content = $comment;
        $new_comment->status = $status;
        $new_comment->save();

        session()->put('upload_id', $id);

        //Add new comment id to comment file in this particular upload
        $upload->push('comments', $new_comment->id);

        return redirect()->back()->with("message","Comment Added Sucessfully");
    }

    // SHOW PAGE TO EDIT ONE COMMENT
    public function edit($id){
        $comments = Comment::where('_id', $id)->first();

        return view ('upload.comment_edit', compact('comments'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'comment' => 'required',
        ]);

        $comment = Comment::where('_id', $id)->whereNull('deleted_at')->first();
        // $upload_id = Upload::where('comments', $id)->first();

        $comment->content = $request->comment;
        $comment->update();

        $upload_id = Session::get('upload_id');
        return redirect()->intended(route('upload.show_one', $upload_id));

    }

    /**
     * Remove the specified resource from storage.
     *
      * @param  int  $id
      * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Comment::where('_id', $id)->delete();

        return redirect()->back();
    }

    public function report($id)
    {
        $rep = Comment::where('_id', $id)->first();

        // status = 1 ==normal comment
        // status = 2 ==reported comment/waiting for admin to review and delete

        $status = 2;

        $rep->status = $status;
        $rep->update();

        return redirect()->back();
    }
}