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

class GroupView extends ModalComponent
{
    public $group, $view_one;

    public function mount($group)
    {
        $this->group = $group;
    }


    public function render()
    {
        $view_one = Group::with('users', 'uploads')->where('_id', $this->group)->first();
        return view('livewire.group-view', ['view_one' => $this->view_one]);
    }
}
