<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';// read table if it has different name
    protected $fillable = ['name'];
    protected $hidden = ['laravel_through_key'];

    public function doctors()
    {
        return $this->hasManyThrough('App\Models\Doctor', 'App\Models\Hospital','country_id','hospital_id','id');
    }
}
