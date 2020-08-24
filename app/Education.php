<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'rollno','university','year','semester','student_id'
    ];
    // public function stus($value='')
    // {
    // 	return $this->hasMany('App\Stu');
    // }
}
