<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Comment;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class UploadTable extends Component
{
    use withPagination;
    
    // public function

    public function render()
    {
        $uploads = Upload::with('users')->whereNull('deleted_at')->paginate(8);
        // dd($uploads);
        return view('livewire.upload-table', ['uploads' => $uploads]);
    }
}
