<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Comment;
use App\Models\Upload;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class AdminDashboard extends Component
{
    // public $total_uploads;
    // public $total_downloads;
    public $uploadsByMonth;
    public $downloadsByMonth;
    public $chartMonths;
    public $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']; 

    public function render()
    {
        // dd($this->months);      
        // $this->total_uploads = DB::collection('uploads')->count();
        // $this->total_downloads = DB::collection('uploads')->sum('downloads');
        $this->uploadsByMonth = DB::collection('uploads')
            ->raw(function ($collection) {
                return $collection->aggregate([
                    [
                        '$group' => [
                            '_id' => [
                                'year' => ['$year' => '$created_at'],
                                'month' => ['$month' => '$created_at'],
                            ],
                            'count' => ['$sum' => 1],
                        ],
                    ],
                    [
                        '$sort' => ['_id.year' => 1, '_id.month' => 1],
                    ],
                ]);
            })
            ->toArray();

        $this->downloadsByMonth = DB::collection('uploads')
            ->raw(function ($collection) {
                return $collection->aggregate([
                    [
                        '$group' => [
                            '_id' => [
                                'year' => ['$year' => '$created_at'],
                                'month' => ['$month' => '$created_at'],
                            ],
                            'count' => ['$sum' => '$downloads'],
                        ],
                    ],
                    [
                        '$sort' => ['_id.year' => 1, '_id.month' => 1],
                    ],
                ]);
            })
            ->toArray();

            $this->chartMonths = array_map(function ($doc) {
                return $this->months[$doc['_id']['month'] - 1];
            }, $this->uploadsByMonth);

            // dd($uploadsByMonth);

        $this->dispatchBrowserEvent('chartData', [
            'uploadsByMonth' => $this->uploadsByMonth,
            'downloadsByMonth' => $this->downloadsByMonth,
            'chartMonths' => $this->chartMonths,
        ]);

         
        return view('livewire.admin-dashboard'
        // , [
        //     'total_uploads' => $this->total_uploads,
        //     'total_downloads' => $this->total_downloads,
        //     'uploadsByMonth' => $this->uploadsByMonth,
        //     'downloadsByMonth' => $this->downloadsByMonth,
        //     'chartMonths' => $this->chartMonths,
        // ]
    );
    }
}
