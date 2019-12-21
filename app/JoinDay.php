<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinDay extends Model
{
    protected $table = 'joinDay';

    protected $fillable = [
        'name', 'joinDateDay',
    ];
}
