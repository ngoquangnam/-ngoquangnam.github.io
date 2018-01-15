<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usershop extends Model
{
	protected $table = 'user_shops';
	protected $fillable = ['username','email'];
	public $timestamps = false;
	
	public function product()
	{
		return $this->hasMany('App\product');
	}
}
