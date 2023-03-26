<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Maklad\Permission\Traits\HasRoles;

class Reply extends Model
{
    use HasFactory, HasRoles, SoftDeletes, Notifiable;

    protected $guard_name = 'web';

    protected $fillable = [
        'user_id',
        'comment_id',
        'content',
        'status',
        'deleted_at',
    ];

    public function comment_id(){
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    public function user_id(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
