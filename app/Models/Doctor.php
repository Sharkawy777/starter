<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';// read table if it has different name
    protected $fillable=['name','title','details','hospital_id','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

    public function hospital(){

        return $this->belongsTo('App\Models\Hospital','hospital_id','id'); //if pk name is 'id' you can delete pk from this line

    }
}
