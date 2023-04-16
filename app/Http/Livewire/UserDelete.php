<?php

namespace App\Http\Livewire;

// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\User;
use App\Models\Upload;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class UserDelete extends ModalComponent
{
    public $user,$user_role, $upload, $comment, $replies, $groups;

    public function mount($user)
    {
        $this->user = $user;
    }


    public function deleteuser()
    {
        $this->user_role = User::where('_id', $this->user)->first();
        // dd($this->user_role);
        if($this->user_role->hasAnyRole(Role::all()))
        {
            $this->user_role->removeRole(Role::all());
        }
        $this->user_role->delete();

        $this->upload = Upload::where('user_id', $this->user)->get();
        $this->comment = Comment::where('user_id', $this->user)->get();
        $this->groups = Group::where('user_id', $this->user)->get();
        $this->replies = Reply::where('user_id', $this->user)->get();

        if($this->upload) {
        foreach($this->upload as $upload){
            $upload->delete();
            };
        }

        if($this->comment){
            foreach($this->comment as $comment){
                $comment->delete();
            }  
        }

        if($this->groups){
            foreach($this->groups as $groups){
                $groups->delete();
            }
        }

        if($this->replies){
            foreach($this->replies as $replies){
                $replies->delete();
            }
        }

        $this->closeModal();

    }

    
    public function render()
    {
        return view('livewire.user-delete');
    }
}
