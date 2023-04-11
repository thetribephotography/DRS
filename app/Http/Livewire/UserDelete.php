<?php

namespace App\Http\Livewire;

// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\User;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class UserDelete extends ModalComponent
{
    public $user,$user_role;

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


        $this->closeModal();

    }

    
    public function render()
    {
        return view('livewire.user-delete');
    }
}
