<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nickNameUser extends Model
{
    protected $table = 'nickNameUsers';

    protected $fillable = [
        'name', 'stampDay', 'groupName',
    ];
}
