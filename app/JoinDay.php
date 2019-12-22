<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinDay extends Model
{

    public function nicknameUsers()
    {
        return $this->belongsToMany('App/nickNameUser');
    }

    protected $dates = [
        'joinDateDay', //追加する。
        'created_at',
        'updated_at'
    ];

    protected $table = 'joinDay';

    protected $fillable = [
        'name', 'joinDateDay',
    ];
}
