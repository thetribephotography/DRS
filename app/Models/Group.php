<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;


class Group extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $guard_name = 'web';

    protected $fillable = [
        'name',
        'upload',
        'group_members',
        'user_id',
        'deleted_at',

    ];

    public function uploads(){
        return $this->hasMany(Upload::class, '_id', 'upload');
    }

    public function user() {
        return $this->hasMany(User::class, '_id', 'group_members');
    }

    public function userone() {
        return $this->belongsTo(User::class, '_id', 'user_id');
    }

}
