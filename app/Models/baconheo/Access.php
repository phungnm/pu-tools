<?php

namespace App\Models\baconheo;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{

    protected $fillable = array('ip','site','created_at');
}
