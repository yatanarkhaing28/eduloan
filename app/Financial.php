<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
   protected $fillable = [
        'educationexp', 'accomodationexp','utilityexp','monthlyincome','student_id'
    ]; 
   public function studentdetails($value='')
   {
   	return $this->hasOne('App\Student');
   }

   public function loans($value='')
   {
   	return $this->hasMany('App\Loan');
   }
}
