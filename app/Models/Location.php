<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table='locations';
    protected $fillable=['id','name'];

    public function employees()
{
    return $this->hasOne(Employee::class);
}
public function provinces()
{
    return $this->hasmany(Province::class);
}
}


