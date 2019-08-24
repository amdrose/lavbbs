<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    protected $guarded = [];

    public function content(){
        return $this->hasMany('App\Models\Content');
    }


}
