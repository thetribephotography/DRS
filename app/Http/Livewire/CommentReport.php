<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class CommentReport extends Component
{
    use withPagination;

    public function render()
    {
        $comments = Comment::with('user')->where('status', 2)->paginate(5);
        // dd($comments);
        return view('livewire.comment-report',['comments' => $comments]);
    }
}
