<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educationdetail extends Model
{
   protected $fillable = [
        'rollno', 'university','year','semester','student_id'
    ]; 
   public function students($value='')
   {
   	return $this->hasOne('App\Student');
   }
}
