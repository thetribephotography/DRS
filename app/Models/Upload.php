<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Upload extends Model
{
    use HasFactory, HasRoles;

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

    ];
}
