<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['id','email','name','thanhpho','huyen','xa','diachi','sodt','node','update_at'];
    public $timestamps = true;
}
