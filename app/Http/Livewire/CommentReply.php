<?php

namespace App\Http\Livewire;

// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Comment;
use App\Models\Upload;
use App\Models\User;
use App\Http\Livewire\Gate;

class CommentReply extends ModalComponent
{
    public $reply, $data;
    // public  Comment $id;

    protected $rules = [
        'reply' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function mount($data){
        $id = $data['id'];
        // Gate::authorize('replyComment', $this->id);
        $this->id = $id;
    }

    
    public function replyComment(Comment $com){
        $id = $this->data['id'];
        // Gate::authorize('replyComment', $id);
        $validated = $this->validate();

        $com = Comment::where('_id', $id)->first();

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
