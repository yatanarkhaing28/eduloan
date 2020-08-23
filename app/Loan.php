<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
     protected $fillable = [
        'amount','status','date','loantime','financial_id'
    ];
    public function financials($value='')
    {
    	return $this->belongsTo('App\Financial');
    }
    public function payments($value='')
    {
    	return $this->hasOne('App\Payment');
    }
}
