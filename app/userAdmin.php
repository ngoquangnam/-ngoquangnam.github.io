<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userAdmin extends Model
{
    protected $table = 'user_admins';

    protected $fillable = ['id','name','email','password'];

    public $timestamps = false;
}
