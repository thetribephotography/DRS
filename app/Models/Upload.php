<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;
// use Spatie\Permission\Traits\HasRoles;

class Upload extends Model
{
    use HasFactory, HasRoles;

    protected $guard_name = 'web';

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

    ];


        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
