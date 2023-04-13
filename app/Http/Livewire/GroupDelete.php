<?php

namespace App\Http\Livewire;

// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\User;
use App\Models\Upload;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class UploadDelete extends ModalComponent
{
    public $group,$one_group;

    public function mount($group)
    {
        $this->group = $group;
    }

    public function deletegroup(){
        $this->one_group = Group::where('_id', $this->group)->delete();

        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.group-delete');
    }
}
