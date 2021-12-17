<?php

namespace App\Models;

use App\Scopes\offerScope;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';// read table if it has different name
    protected $fillable=['photo','name','price','details','status','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

    // register global scope
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new offerScope);
    }

    ################### local Scopes ########################
    public function scopeInactive(){
        return $inactiveOffers = Offer::where('status',0);
    }
    public function scopeInvalid(){
        return $invalidOffers = Offer::where('status',0)->whereNull('details');
    }
    #########################################################
    ############################ mutators ###################
    public function setNameAttribute($val){
        $this-> attributes['name'] = strtoupper($val);
    }
    ############################ mutators ###################

}
