<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class FilterPost extends Component
{
    // public $categories;
    public $query;
    public $topic_id;
    public function mount()
    {
        // $this->categories = Category::all();
    }
    public function render()
    {

        return view('livewire.filter-post',);
    }

    public function filter()
    {
        $this->emitTo('show-post', 'reloadPosts', $this->topic_id, $this->query);
    }
}
