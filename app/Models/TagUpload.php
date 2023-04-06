<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class TagUpload extends Model
{
    use HasFactory;

    protected $collection = 'tag_uploads';


    protected $fillable = [
        'tag_id',
        'upload_id',
    ];
}
