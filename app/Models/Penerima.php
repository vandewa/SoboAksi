<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Penerima extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $appends = ['preview_ktp', 'preview_penerima'];

    public function provinsi(){
        return $this->belongsTo(ComRegion::class, 'region_prop');
    }

    public function kabupaten(){
        return $this->belongsTo(ComRegion::class, 'region_kab');
    }

    public function kecamatan(){
        return $this->belongsTo(ComRegion::class, 'region_kec');
    }

    public function kelurahan(){
        return $this->belongsTo(ComRegion::class, 'region_kel');
    }

    public function getPreviewKtpAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['foto_ktp']));
        return $devan;
    }

    public function getPreviewPenerimaAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['foto_penerima']));
        return $devan;
    }

    public function identitas(){
        return $this->belongsTo(ComCode::class, 'kode_identitas');
    }

}
