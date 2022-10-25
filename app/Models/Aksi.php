<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aksi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function publikasi(){
        return $this->belongsTo(ComCode::class, 'publish_st');
    }

    public function user(){
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function kategori(){
        return $this->belongsTo(kategori::class, 'kategori');
    }
    
}
