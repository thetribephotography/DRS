<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
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


    public function uploads()
    {
        return $this->belongsToMany(Category::class, 'upload_categories', 'category_id', 'upload_id');
    }
}
