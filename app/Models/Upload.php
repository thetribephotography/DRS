<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
// use Spatie\Permission\Traits\HasRoles;

class Upload extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $guard_name = 'web';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'description',
        'slug',
        'published_at',
        'language',
        'author',
        'keywords',
        'access_id',
        'doi_id',
        'topic_id',
        'path',
        'media',
        'user_id',
        'tags_id',
        'comments',
        'category_id',
        'file_type',
        'file_size',
        'group_id',

    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags_id()
    {
        return $this->hasMany(Tag::class, 'tags_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category_id()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    public function group()
    {
        return $this->hasMany(Group::class, 'group_id');
    }

    public function scopeFilter($query, array $filters)
    {

        if ($filters['search'] ?? false) {

            //searches by title
            $query->where('title', 'like', '%' . request('search') . '%');
        }



        // //Tag filter
        // if ($filters['tag'] ?? false) {
        //     //quer like code
        //     $query->where('tags', 'like', '%' . request('tag') . '%');
        // }

        // //search filter
        // if ($filters['search'] ?? false) {
        //     //query like code

        //     //searches by title
        //     $query->where('title', 'like', '%' . request('search') . '%')

        //     //searches by description
        //     ->orWhere('description', 'like', '%' . request('search') . '%')

        //     //searches by tags
        //     ->orWhere('tags', 'like', '%' . request('search') . '%');
        // }
    }
}
