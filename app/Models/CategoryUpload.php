<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class CategoryUpload extends Model
{
    use HasFactory;

    protected $collection = 'upload_categories';

    protected $fillable = [
        'category_id',
        'upload_id',
    ];
}
