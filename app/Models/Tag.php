<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $guard_name = 'web';

    protected $fillable = [
        'name',
    ];


    public function upload (){
        return $this->hasMany(Upload::class);
    }


}
