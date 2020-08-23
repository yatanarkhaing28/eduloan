<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name','photo','fathername','nrcno','state','city','phoneno','user_id'
    ];
    public function educations($value='')
    {
    	return $this->hasOne('App\Education');
    }
    public function financials($value='')
    {
    	return $this->hasOne('App\Financial');
    }
}
