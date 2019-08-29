<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;

class User extends AuthUser
{
    //
    protected $guarded = [];

    //文章表关联
    public function content(){
        return $this->hasMany(Content::class);
    }

}
