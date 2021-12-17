<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $table = 'medicals';// read table if it has different name
    protected $fillable = ['pdf', 'patient_id'];
    protected $hidden = [''];


}
