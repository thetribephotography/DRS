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
    public $role_id, $newrole, $runs, $old_role_name; 
    public $rales, $one, $roles, $newvariable;

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
        $this->one = User::where('_id', $this->user)->first();
        // $this->runs = $this->one->reply_ids;
        $this->role_id = Role::whereIn('_id', $this->one->role_ids)->get();
        $this->upload = Upload::Where('user_id', $this->user)->get();
        $this->rales = Role::all();

        return view('livewire.user-show', [$this->one, $this->upload, $this->rales, $this->role_id]);
    }

    public function update()
    {
        $validateData = $this->validate();

        $this->role_id = Role::whereIn('_id', $this->one->role_ids)->first();
        $this->old_role_name = $this->role_id->name;

        $this->newrole = $this->one;

        // dd($this->newrole);

        $this->newvariable = Role::findbyName($this->old_role_name);

        // dd($this->newvariable);

        if($this->newrole->hasRole($this->newvariable))
        {
            $this->newrole->removeRole($this->newvariable);
            // dd($this->roles);
            $this->newrole->assignRole($this->roles);
        } 

        $this->closeModal();
    }
}
