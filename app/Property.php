<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;

    public function keypoints(){
        return $this->hasMany('App\Keypoint');
    }

    public function amenities(){
        return $this->hasMany('App\Amenity');
    }

    public function facts(){
        return $this->hasMany('App\Fact');
    }

    public function delete(){
        $this->keypoints()->delete();
        $this->amenities()->delete();
        $this->facts()->delete();
        
        return parent::delete();
    }
}
