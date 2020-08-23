<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financial_Info extends Model
{
    protected $fillable = [
        'education_exp','accomodation_exp','utility_exp','monthly_income','student_id'
    ];
    public function students($value='')
    {
    	return $this->hasOne('App\Student_Info');
    }
    public function loans($value='')
    {
    	return $this->hasMany('App\Loan');
    }
}
