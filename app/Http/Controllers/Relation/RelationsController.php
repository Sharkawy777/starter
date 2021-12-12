<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use App\User;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    public function hasOneRelation()
    {
//        $user = User::with('getPhone') -> find(3);
        $user = User::with(['getPhone' => function ($q) {
            $q->select('code', 'phone', 'user_id');
        }])->find(3);

//        return $user ->getPhone -> code;
//        return $user -> name;
        return response()->json($user);
    }

    public function hasOneRelationReverse()
    {
//        $phone = Phone::find(1);
//        $phone = Phone::with('getUser')->find(1);
        $phone = Phone::with(['getUser' => function ($q) {
            $q->select('id','name', 'email', 'age');
        }])->find(1);
        // make hidden attribute visible
        $phone->makeVisible(['user_id']);
        // make visible attribute hidden
//        $phone -> makeHidden(['code']);

//        return $phone->getUser; //return user of this phone
        return $phone;

    }

    public function getUserHasPhone(){
        return User::whereHas('getPhone')->get();
    }

    public function getUserNotHasPhone(){
        return User::whereDoesntHave('getPhone')->get();
    }

    public function getUserWhereHasPhoneWithCondition(){
        return User::whereHas('getPhone',function ($q){
            $q->where('code','02');
        })->get();
    }


}
