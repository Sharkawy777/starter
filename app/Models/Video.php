<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $table = 'videos';// read table if it has different name
    protected $fillable=['name','viewers'];
    protected $hidden=[];
    public $timestamps = false;
}
