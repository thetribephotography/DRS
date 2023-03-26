<?php

namespace App\Http\Livewire;

// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Comment;
use App\Models\Upload;
use App\Models\User;
use App\Http\Livewire\Gate;
use Illuminate\Support\Facades\Auth;

class CommentReply extends ModalComponent
{
    public $reply, $data, $user;


    protected $rules = [
        'reply' => 'required',
    ];

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

        $user = Auth::id();
        

        $com = Comment::where('_id', $data)->first();

        $com->push('replies', $this->reply);

        session()->flash('message', 'Comment Posted');
        $this->resetInput();
        $this->closeModal();
    }

    public function resetInput(){
        $this->reply = '';
    }

    public function render()
    {
        return view('livewire.comment-reply');
    }
}
