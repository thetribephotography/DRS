<?php

namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GroupAll extends Component
{
    public $groups;
    public function mount()
    {
        $id = Auth::id();
        $user = User::where("_id", $id)->first();


        $this->groups = Group::with('uploads', 'user')
            // ->whereIn('group_members', [$user->id])
            ->where('user_id', $user->id) //Fetches those users own
            ->get();

        $title = "Groups | All";
    }

    public function render()
    {
        return view('livewire.group-all');
    }
}
