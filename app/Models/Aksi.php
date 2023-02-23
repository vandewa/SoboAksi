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

    public function kategorinya(){
        return $this->belongsTo(Kategori::class, 'kategori');
    }

    public function fotonya(){
        return $this->hasMany(AksiPhoto::class, 'aksi_id');
    }

    public function sampul(){
        return $this->hasOne(AksiPhoto::class, 'aksi_id');
    }

    public function penerimaAksi()
    {
        return $this->belongsToMany(Penerima::class, 'aksi_penerimas', 'aksi_id','penerima_id');
    }

    public function penerimaDonasi()
    {
        return $this->hasOne(AksiPenerima::class, 'aksi_id');
    }

    public function dukung()
    {
        return $this->hasMany(AksiDukung::class, 'aksi_id');
    }
    public function dukunganSaya()
    {
        return $this->hasOne(AksiDukung::class, 'aksi_id')->where('creator_id', auth()->user()->id??'');
    }

    public function partisipasi()
    {
        return $this->hasMany(AksiPartisipasi::class);
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'aksi_id');
    }


}
