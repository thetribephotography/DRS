<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Upload;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPosts extends Component
{
    use WithPagination;
    // 'posts' => Post::paginate(10),

    //   {{ $posts->links() }}

    public $search = '';
    protected $posts;
    protected $queryString = ['search'];
    public $categories;
    public $tags;
    public $selectedSortOption;
    public $SelectedCategories = [];
    public $SelectedTags = [];
    public $SelectedAccess = [];
    public $SelectedType = [];
    public $SelectedDates = [];



    // Override the default layout file for this component
    public $isActive = true;



    public function resetFilters()
    {
        $this->reset('search');
        // Will only reset the search property.

        $this->reset(['search', 'isActive']);
        // Will reset both the search AND the isActive property.

        $this->resetExcept('search');
        // Will only reset the isActive property (any property but the search property).
    }


    public function mount()
    {
        $this->categories = Category::all();
        $this->tags = Tag::all();
        $this->posts = Upload::latest()->filter(request(['search']))->paginate(8);

        // dd($this->posts);
    }
    public function render()
    {

        return view('livewire.search-posts', [
            "posts" => $this->posts,
        ])->layout(\App\View\Components\Search::class);
    }

    public function filter()
    {
        $query = Upload::query();

        // Condition for Sort
        if ((int)$this->selectedSortOption == 0) {
            // For filter
            if ($this->search) {
                $query->where('title', 'like', '%' . $this->search . '%')->whereIn("access_id", ["1", "2"]);

                if (!empty($this->SelectedType)) {
                    $query
                        ->whereIn('topic_id', $this->SelectedType);
                }
                if (!empty($this->SelectedAccess)) {
                    $query->whereIn('access_id', $this->SelectedAccess);
                }
                if (!empty($this->SelectedDates)) {
                    $query->whereIn('published_at', []);
                }
                if (!empty($this->SelectedCategories)) {
                    $query->whereIn('category_id', $this->SelectedCategories);
                }
            }
        } elseif ((int)$this->selectedSortOption == 1) { //Sort By Latest
            if ($this->search) {
                $query->where('title', 'like', '%' . $this->search . '%')->orderBy('created_at', 'desc');
            }
        } elseif ((int)$this->selectedSortOption == 2) { // Sort by most views
            if ($this->search) {
                $query->where('title', 'like', '%' . $this->search . '%')->orderBy('views', 'desc');
            }
        } elseif ((int)$this->selectedSortOption == 3) { //Sort by Downloads
            if ($this->search) {
                $query->where('title', 'like', '%' . $this->search . '%')->orderBy('downloads', 'desc');
            }
        } elseif ((int)$this->selectedSortOption == 4) { //Sort By Upload type
            if ($this->search) {
                $query->where('title', 'like', '%' . $this->search . '%')->orderBy('topic_id', 'asc');
            }
        }


        $this->posts = $query->paginate(8);
    }


    public function updated()
    {
        if ($this->search) {
            $query = Upload::query()
                ->where('title', 'like', '%' . $this->search . '%')
                ->whereIn("access_id", ["1", "2"]);
            $this->posts = $query->paginate(8);
        } else {
            $this->posts = Upload::whereIn("access_id", ["1", "2"])->paginate(8);
        }
    }
}
