<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Livewire\Component;

class ShowPost extends Component
{
    public $uploads;


    public $listeners = ['reloadPosts'];
    public function mount()
    {
        $this->uploads = Upload::all();
    }
    public function render()
    {
        return view('livewire.show-post');
    }

    public function reloadPosts($topic_id, $query)
    {
        $this->uploads = Upload::query();

        if ($topic_id) {
            $this->uploads = $this->uploads->where('topic_id', $topic_id);
        }

        if ($query) {
            $this->uploads = $this->uploads->where('title', 'like', '%' . $query . '%');
        }

        $this->uploads = $this->uploads->get();
    }
}
