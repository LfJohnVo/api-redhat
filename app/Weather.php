<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = ['id', 'date', 'lat', 'lon', 'city', 'state', 'temperature'];
}
