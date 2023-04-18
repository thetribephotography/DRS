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

    public $table_search='';
    // public $page = 8;

    public function render()
    {
        $users = User::where('name', 'like', '%'.$this->table_search.'%')->orwhere('deleted_at',null)->paginate(8);
        return view('livewire.user-table', ['users' => $users]);
    }
}
