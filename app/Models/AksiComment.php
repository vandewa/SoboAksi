<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AksiComment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(self::class, 'root_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'creator_id');
    }
}
