<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use http\Exception;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function __construct(){
        $this -> middleware('auth')->except('');// to expect method from middleware
    }
    public function showString(){
        return 'static string';
    }
    public function showString0(){
        return 'static string0';
    }
}
