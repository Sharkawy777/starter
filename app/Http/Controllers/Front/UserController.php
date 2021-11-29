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
        $data = [];
        $data['data']=5;
        $data['id']=777;
        $data['name']='sharkawy';

        return view('welcome',$data);
    }
}
