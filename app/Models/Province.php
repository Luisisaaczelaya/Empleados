<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table='provinces';
    protected $fillable=['id','name'];

    public function locations()
{
    return $this->hasmany(Location::class);

}
public function regions()
{
    return $this->hasmany(Region::clsass);
}
}
