<?php

namespace App\Http\Livewire;

// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Comment;
use App\Models\Upload;
use App\Models\User;
use App\Http\Livewire\Gate;
use App\Models\Reply;
use Illuminate\Support\Facades\Auth;

class CommentReply extends ModalComponent
{
    public $reply, $data, $user;
    public $status, $reply_id, $one;
    public $interval = 5;


    protected $rules = [
        'reply' => 'required',
    ];

    // protected $listeners = ['refreshData' => 'refreshData'];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function mount($data){
        $this->data = $data;
    }
    
    public function replyComment(Comment $com){
        $data = $this->data;
        $validated = $this->validate();

        $this->user = Auth::id();
        $this->status = 1;

        $reply_id = new Reply;
            $reply_id->user_id = $this->user;
            $reply_id->comment_id = $this->data;
            $reply_id->content = $this->reply;
            $reply_id->status = $this->status;
            $reply_id->save();

        $com = Comment::where('_id', $data)->first();

        $com->push('replies', $reply_id->_id);

        session()->flash('message', 'Comment Posted');
        $this->resetInput();
        // $this->emit('refreshData');
        // $this->reply_id->refresh();
        // $this->com->refresh();
        $this->closeModal();
    }

    // public function refreshData()
    // {
    //     // code to refresh data
    //     $this->comments = Comment::with('replies')->where('_id', $this->data)->get();
    // }

    public function resetInput(){
        $this->reply = '';
    }

    public function render()
    {
        return view('livewire.comment-reply');
    }
}
