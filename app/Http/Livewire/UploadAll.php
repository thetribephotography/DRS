<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UploadAll extends Component
{
    use WithPagination;
    public $user;
    public $uploads;
    public string $search = '';
    protected $queryString = ['search'];
    public $sortOption;
    public function mount()
    {
        $this->user = Auth::id();

        $this->uploads = Upload::where('user_id', $this->user)->where('deleted_at', null)->get();
    }
    public function render()
    {
        if ($this->search) {
            $this->uploads =  Upload::where('user_id', $this->user)
                ->where('deleted_at', null)
                ->where('title', 'like', '%' . $this->search . '%')
                ->get();
        }

        return view('livewire.upload-all', [
            'uploads' => $this->uploads,
        ]);
    }

    public function sort()
    {
        $option = (int)$this->sortOption;
        // If sortOption is filled
        if (!empty($option)) {
            if ($option == 1) {
                $this->uploads = Upload::where('user_id', $this->user)->where('deleted_at', null)->orderBy('ceated_at', 'desc')->get()->paginate(6);
            } elseif ($option == 2) {
                $this->uploads = Upload::where('user_id', $this->user)->where('deleted_at', null)->orderBy('ceated_at', 'desc')->get()->paginate(6);
            }
        }
    }
    public function updated($property)
    {
        if ($property == 'search') {
            $this->resetPage();
        }
    }
}
