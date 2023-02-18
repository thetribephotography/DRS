<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Maklad\Permission\Traits\HasRoles;

class Comment extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $fillable = [
        'user_id',
        'upload_id',
        'content',
    ];

    protected $casts = [

    ];

    protected $hidden = [

    ];

    //Relationship of the user to comments
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function upload()
    {
        return $this->belongsTo(Upload::class, 'upload_id');
    }


}