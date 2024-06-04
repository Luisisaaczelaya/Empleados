<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeel extends Model
{
    protected $table='employees';
    protected $fillable=['id','name','last_name','gender','civil_status','number_phone','email','address'];

public function locations ()
{

    return $this->belongsto(Location::class);
}
}

