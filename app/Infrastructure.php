<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infrastructure extends Model
{
    //
    protected $table = 'infrastructures';
    protected $fillable = ['title','image'];
}
