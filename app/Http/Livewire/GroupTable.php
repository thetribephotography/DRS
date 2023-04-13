<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Comment;
use App\Models\Upload;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;


class GroupTable extends Component
{
    use withPagination;

    public function render()
    {
        $groups = Group::with('users')->whereNull('deleted_at')->paginate(5);
        // $uploads = Upload::with('users')->whereNull('deleted_at')->paginate(8);
        return view('livewire.group-table', ['groups' => $groups]);
    }
}
