<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonasiPayment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function aksi()
    {
        return $this->belongsTo(Aksi::class, 'aksi_id');
    }

    public function penerimaDonasi()
    {
        return $this->hasOne(AksiPenerima::class, 'aksi_id');
    }
}
