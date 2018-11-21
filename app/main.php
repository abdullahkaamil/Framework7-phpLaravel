<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class main extends Model
{
    protected $fillable =['s_name','s_surname'];
    public $timestamps = false;


}
