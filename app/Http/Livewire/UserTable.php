<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserTable extends Component
{
    public $users;

    // public function all(){
        
    // }

    public function render()
    {
        $this->users = User::whereNull('deleted_at')->get();
        return view('livewire.user-table', [$this->users]);
    }
}
