<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komentar extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function childrens()
    {
        return $this->hasMany(Komentar::class, 'comment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hasLike()
    {
        return $this->hasOne(Like::class)->where('likes.user_id', Auth::user()->id);
    }

    public function totalLikes()
    {
        return $this->hasMany(Like::class)->count();
    }

}
