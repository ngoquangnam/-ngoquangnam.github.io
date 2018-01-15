<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
	protected $table = 'products';

	protected $fillable = ['id','name','price','image','keywords','add_info','discription','review','admin_id','category_id'];

	public $timestamps = false;

	public function category()
	{
		return $this->belongTo('App\category');
	}
	public function admin()
	{
		return $this->belongTo('App\admin');
	}

	public function image()
	{
		return $this->hasMany('App\image');
	}
	public function size()
	{
		return $this->belongsToMany('App\size','App\productsize');
	}
	public function color()
	{
		return $this->belongsToMany('App\color','App\productcolor');
	}
}
