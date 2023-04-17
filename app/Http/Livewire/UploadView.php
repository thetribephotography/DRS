<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;
use App\Models\Upload;
use App\Models\Group;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Comment;
use App\Models\CategoryUpload;
use App\Models\TagUpload;
use App\Models\GroupShip;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class UploadView extends ModalComponent
{
    public $upload, $view_one;

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }    

    public function mount($upload)
    {
        $this->upload = $upload;
    }

    public function render()
    {
        $this->view_one = Upload::with('users', 'comments', 'categories', 'tags')->where('_id', $this->upload)->first();
        return view('livewire.upload-view', [$this->view_one]);
    }
}
