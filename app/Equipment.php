<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //
    public function rating()
    {
        return $this->hasMany('App\EquipmentRating');
    }
}
