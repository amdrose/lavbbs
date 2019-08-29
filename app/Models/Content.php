<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Content extends Model
{
    //
    protected $guarded = [];

    //关联模块
    public function module(){
        return $this->hasOne('app/Models/Module');
    }

    //关联用户
    public function user(){
        return $this->belongsTo(\App\Models\User::class,'user_id','id');
    }
}
