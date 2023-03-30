<?php

namespace App\Http\Livewire;

use Livewire\Component;

/**
 * Summary of SearchCard
 */
class SearchCard extends Component
{

    /**
     * Summary of string
     * @var
     */
    public $data, $string;

    /**
     * Summary of search
     * @var array
     */
    protected $search = [];


    public function mount($data)
    {
        $this->data = $data;
    }
    public function render()
    {
        return view('livewire.search-card');
    }
}
