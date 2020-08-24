<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable = [
        'name', 'photo','fathername','nrcno','state','city','phoneno'
    ]; 

   public function educationdetails($value='')
   {
   	return $this->hasOne('App\Educationdetail');
   }

   public function financials($value='')
   {
   	return $this->hasOne('App\Financial');
   }
}
