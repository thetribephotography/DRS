<?php

namespace App\Http\Livewire;

// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\User;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class UploadDelete extends ModalComponent
{
    public $upload,$one_upload;

    public function mount($upload)
    {
        $this->upload = $upload;
    }

    public function deleteupload(){
        $this->one_upload = Upload::where('_id', $this->upload)->delete();

        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.upload-delete');
    }
}
