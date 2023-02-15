<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
// use Spatie\Permission\Traits\HasRoles;

//Declaring Acccess rights
const PUBLIC_ACCESS = "public";
const PRIVATE_ACCESS = "private";
const GROUP_ACCESS = "group";


class Upload extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $guard_name = 'web';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'description',
        'authors',
        'type',
        'user_id',
        'user_id',
        'path',
        'thumbnail_path',
        'access_rights',
        'category',
        'comments',
        'tags',
        'languages',
        'file_type',
        'file_size',
    ];

    protected $casts = [
        'access_rights' => 'string',
        'tags' => 'array',
        'comments' => 'array',
        'category' => 'array',
        'authors' => 'array',
        'languages' => 'array',
    ];

    // SCOPE FILTER LEARN
    // public function scopeActive($query)
    // {
    //     return $query->where('active', true);
    // }

    // MAIN SCOPE FILTER
    public function scopeFilter($query, array $filters){

        if($filters['search'] ?? false){

            //searches by title
        $query->where('title', 'like', '%' . request('search') . '%');

        }

    }


        public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}





