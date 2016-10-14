<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
        protected $fillable = ['start_date','end_date','position','name','address','link'];

}
