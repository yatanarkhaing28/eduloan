<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
   protected $fillable = [
        'installment', 'balance','paymentdate','loan_id'
    ]; 
   public function loans($value='')
   {
   	return $this->hasOne('App\Loan');
   }
}
