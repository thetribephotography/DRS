<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadCategory extends Model
{

    use HasFactory;


    protected $collection = 'upload_categories';



    protected $fillable = [
        'upload_id',
        'category_id',
    ];
}
