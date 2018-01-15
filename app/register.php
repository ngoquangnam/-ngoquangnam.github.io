<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class register extends Authenticatable
{

	protected $table = 'registers';

	protected $fillable = ['id','name','email','password'];

	public $timestamps = false;
}
