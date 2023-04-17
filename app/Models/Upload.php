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
        'doi',
        'topic_id',
        'path',
        'media',
        'user_id',
        'license',
        'tags_id',
        'comments',
        'category_id',
        'file_type',
        'file_size',
        'group_id',

    ];

    protected $casts = [
        'published_at' => 'date',
        'category_id' => 'array',
        'tags_id' => 'array',
        'language' => 'array',
        'group_id' => 'array',
        'keywords' => 'array',
        'author' => 'array',
    ];


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'upload_categories', 'upload_id', 'category_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_uploads', 'upload_id', 'tag_id');
    }

    public function group()
    {
        return $this->belongsToMany(Group::class, 'group_ships', 'group_id', 'upload_id');
    }

    // Filter frrom Request
    public function scopeFilter($query, array $filters)
    {

        if ($filters['search'] ?? false) {

            //searches by title
            $query->where('title', 'like', '%' . request('search') . '%')->whereIn("access_id", ["1", "2"]);
        }
    }
}
