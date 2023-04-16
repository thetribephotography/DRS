<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Comment;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class UploadReport extends Component
{
    use withPagination;


    public function render()
    {
        $reports = Upload::where('status', 2)->paginate(5);
        return view('livewire.upload-report', ['reports' => $this->reports]);
    }
}
