<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    protected $guarded = [];

    //文章表关联
    public function content(){
        return $this->hasMany('App\Models\Content');
    }


}
