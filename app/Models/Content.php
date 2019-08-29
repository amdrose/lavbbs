<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $guarded = [];

    //关联用户表
    public function module(){
        return $this->belongsToMany('app/Models/Module');
    }

    //关联用户
    public function user(){
        return $this->belongsToMany(User::class);
    }
}
