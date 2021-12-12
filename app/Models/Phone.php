<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';// read table if it has different name
    protected $fillable=['code','phone','user_id'];
    protected $hidden=['user_id'];

    ######################## Relations ######################

    public function getUser(){
        return $this ->belongsTo('App\User','user_id');
    }

    ######################## End Relations ##################
}
