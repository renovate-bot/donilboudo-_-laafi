<?php

namespace laafi;

use Illuminate\Database\Eloquent\Model;
use laafi\Models\Speciality;

class Doctor extends Model
{
    protected $fillable = ['first_name', 'last_name', 'gender', 'phone', 'country', 'city', 'speciality_id', 'picture_id'];    

    public function specialities()
    {
        return $this->hasMany('Speciality');
    }
}
