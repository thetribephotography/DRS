<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;
use App\Models\Upload;
use App\Models\Group;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\CategoryUpload;
use App\Models\TagUpload;
use App\Models\GroupShip;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class CommentShow extends ModalComponent
{
    public $comment, $show_one, $comment_delete;

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }    

    public function mount($comment)
    {
        $this->comment = $comment;
    }

    public function render()
    {
        $this->show_one = Comment::where('_id', $this->comment)->first();
        return view('livewire.comment-show', [$this->show_one]);
    }

    public function delete(){
        $this->comment_delete = Comment::where('_id', $this->comment)->first();
        if($this->comment_delete){
            
        } else {
            $this->comment_delete = Reply::where('_id', $this->comment)->first();
            $this->comment_delete->delete();
        }

        $this->comment_delete->delete();

        $this->closeModal();
    }
}
