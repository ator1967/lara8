<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persoane extends Model
{
    protected $table='persoane';
    protected $fillable =['nume','email'];
    // protected $connection='mysql';

}
