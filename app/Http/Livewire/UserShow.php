<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;


class UserShow extends ModalComponent
{
    public $user, $upload, $role;
    public $role_id, $newrole, $old_role_name; 
    public $rales, $one_user, $roles, $old_role_instance;

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    protected $rules = [
        'roles' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        $this->one_user = User::where('_id', $this->user)->first();

        $this->role_id = Role::whereIn('_id', $this->one_user->role_ids)->get();
        $this->upload = Upload::Where('user_id', $this->user)->get();
        $this->rales = Role::all();

        return view('livewire.user-show', [$this->one_user, $this->upload, $this->rales, $this->role_id]);
    }

    public function update()
    {
        $validateData = $this->validate();

        $this->role_id = Role::whereIn('_id', $this->one_user->role_ids)->first();
        $this->old_role_name = $this->role_id->name;

        $this->newrole = $this->one_user;

        $this->old_role_instance = Role::findbyName($this->old_role_name);

        if($this->newrole->hasRole($this->old_role_instance))
        {
            $this->newrole->removeRole($this->old_role_instance);
       
            $this->newrole->assignRole($this->roles);
        } 

        $this->closeModal();
    }
}
