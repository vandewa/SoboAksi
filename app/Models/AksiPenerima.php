<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AksiPenerima extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    protected $casts = [
        "donasi_tercapai" => "double"
    ];

    public function penerima()
    {
        return $this->belongsTo(Penerima::class, 'penerima_id');
    }
}
