<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commercial extends Model
{
    //
    protected $table = 'commercials';
    protected $fillable = ['title','image'];
}
