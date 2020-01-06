<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinDay extends Model
{

    public function nicknameUsers()
    {
        return $this->belongsToMany('App/nickNameUser');
    }

    protected $table = 'joinDay';

    protected $fillable = [
        'name', 'joinDateDay',
    ];
}
