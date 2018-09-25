<?php

namespace laafi;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['first_name', 'last_name', 'gender', 'phone', 'birthday', 'country', 'city', 'marital_status', 'blood_group', 'picture_id'];    
}
