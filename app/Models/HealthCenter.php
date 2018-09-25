<?php

namespace laafi;

use Illuminate\Database\Eloquent\Model;

class HealthCenter extends Model
{
    protected $fillable = ['name', 'country', 'city', 'phone'];    
}
