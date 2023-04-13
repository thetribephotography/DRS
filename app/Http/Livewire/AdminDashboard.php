<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Comment;
use App\Models\Upload;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class AdminDashboard extends Component
{

    public function render()
    {
        $total_uploads = DB::collection('uploads')->count();
        $total_downloads = DB::collection('uploads')->sum('downloads');
        return view('livewire.admin-dashboard');
    }
}
