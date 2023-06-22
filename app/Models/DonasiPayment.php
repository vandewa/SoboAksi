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
        return $this->belongsTo(AksiPenerima::class, 'aksi_penerima_id');
    }

    public function donatur()
    {
        return $this->belongsTo(User::class, 'payment_user_id');
    }
}
