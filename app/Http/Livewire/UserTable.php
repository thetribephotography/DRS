<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Comment;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;


class UserTable extends Component
{
    use WithPagination;

    // public delete;

    public function render()
    {
        $users = User::whereNull('deleted_at')->paginate(8);
        return view('livewire.user-table', ['users' => $users]);
    }
}
