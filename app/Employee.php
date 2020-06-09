<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $guarded =[];
    protected $fillable =['name','email','address','update_at','created_at'];
}
