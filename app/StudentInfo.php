<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    protected $fillable = [
        'name','photo','fathername','nrcno','state','city','phoneno','user_id'
    ];
    public function educations($value='')
    {
    	return $this->hasOne('App\Education_Detail');
    }
    public function financials($value='')
    {
    	return $this->hasOne('App\Financial_Info');
    }
}
