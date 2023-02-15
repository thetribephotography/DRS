<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function upload()
    {
        return $this->belongsTo(Upload::class, 'tags');
    }
}
