<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table='regions';
    protected $fulleable=['id','name'];
    public function provinces()
    {
return $this->hasmany(Province::class);
    }
}
