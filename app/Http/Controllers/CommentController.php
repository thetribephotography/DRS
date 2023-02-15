<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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

        $upload = Upload::find($id);

        $new_comment = new Comment;
        $new_comment->user_id = $user_id;
        $new_comment->upload_id = $id;
        $new_comment->content = $comment;
        $new_comment->save();

        //Add new comment id to comment file in this particular upload
        $upload->push('comments', $new_comment->id);

        return redirect('/')->with("Comment Added Succesfully");
    }

    /**
     * Update the specified resource in storage.
     *

     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
