<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use PhpParser\Node\Expr\Cast\Object_;

class UserController extends Controller
{
    public function showUserName()
    {
        return 'Mahmoud El-Sharkawy';
    }
    public function getIndex(){
//
//        $data = [];
//        $data['data']=5;
//        $data['id']=777;
//        $data['name']='sharkawy';
        $obj = new \stdClass();
        $obj -> name = 'shark';
        $obj -> age = 22;
        $obj -> id = 41710020;
        $obj -> college = 'CS';
        return view('welcome',compact('obj'));
//        return view('welcome',$data);
    }

}
