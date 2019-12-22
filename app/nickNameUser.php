<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\JoinDay;


class nickNameUser extends Model
{

    public function joindays()
    {
        // return $this->hasMany('App\JoinDay');
        return $this->hasMany(JoinDay::class, 'id');
    }

    protected $table = 'nicknameUsers';

    protected $fillable = [
        'name', 'stampDay', 'groupName',
    ];
}
