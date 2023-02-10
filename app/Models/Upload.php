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
        'published_at',
        'language',
        'author',
        'keywords',
        'access_id',
        'doi_id',
        'topic_id',
        'path',
        'user_id',
        'tags_id',

    ];


        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tag(){
        return $this->belongsTo(Tag::class, 'tags_id');
    }
}
