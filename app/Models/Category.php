<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;

class Category extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'name',
        'description',
        'slug',
    ];

    protected $casts = [];

    protected $hidden = [];


    public function upload()
    {
        return $this->hasMany(Upload::class);
    }
}
