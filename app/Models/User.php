<?php

namespace App\Models;

use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $fillable = [
        'name',
        'email',
        'otp',
        'password',
        'nik',
        'nomor_hp',
        'alamat',
        'jenis_kelamin_st',
        'pekerjaan_st',
        'tgl_lahir',
        'region_prop',
        'region_kab',
        'region_kec',
        'region_kel',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo(ComCode::class, 'role_st');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function jk(){
        return $this->belongsTo(ComCode::class, 'jenis_kelamin_st');
    }

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
}