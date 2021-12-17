<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';// read table if it has different name
    protected $fillable=['name','title','details','hospital_id','medical_id','created_at','updated_at'];
    protected $hidden=['created_at','updated_at','pivot'];

    public function hospital(){

        return $this->belongsTo('App\Models\Hospital','hospital_id','id'); //if pk name is 'id' you can delete pk from this line

    }

    public function services(){
        //many to many
        return $this -> belongsToMany('App\Models\Service','doctor_service','doctor_id','service_id','id','id');
    }

    // accessors
    public function getGenderAttribute($val){
        return $val == 1?'male':'female';
    }
    //mutators

}
