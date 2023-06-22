<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AksiPhoto extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $appends = [
        'url_photo',
      ];

    protected $guarded = [];

    public function getUrlPhotoAttribute(){
       $data = $this->attributes['url'];
       if($data){
        return asset('storage/'.$data);
       }
       return asset('trusthand/assets/images/resource/cause-1.jpg');
    }
}
