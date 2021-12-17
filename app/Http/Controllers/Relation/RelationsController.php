<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Phone;
use App\Models\Service;
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
            $q->select('id', 'name', 'email', 'age');
        }])->find(1);
        // make hidden attribute visible
        $phone->makeVisible(['user_id']);
        // make visible attribute hidden
//        $phone -> makeHidden(['code']);

//        return $phone->getUser; //return user of this phone
        return $phone;

    }

    public function getUserHasPhone()
    {
        return User::whereHas('getPhone')->get();
    }

    public function getUserNotHasPhone()
    {
        return User::whereDoesntHave('getPhone')->get();
    }

    public function getUserWhereHasPhoneWithCondition()
    {
        return User::whereHas('getPhone', function ($q) {
            $q->where('code', '02');
        })->get();
    }

    ################## One to many ###################
    public function getHospitalDoctors()
    {
        $hospital = Hospital::find(4);//Hospital::where('id',1)->first(); //Hospital::first();

//        return $hospital->doctors; //return doctors in this hospital
        $hospital = Hospital::with('doctors')->find(4); // hospital with doctors

        $doctors = $hospital->doctors;

        //return odoctors name of this hospital
        /*foreach ($doctors as $d){
            echo $d -> name.'<br>';
        }*/

        // return hospital name of doctor id 4
        $doctors = Doctor::find(4);
        return $doctors->hospital->name;

    }

    //get hospitals
    public function hospitals()
    {
        $hospitals = Hospital::select('id', 'name', 'address')->get();
        return view('doctors.hospitals', compact('hospitals'));
    }

    // get doctors of hospital
    public function doctors($hospital_id)
    {
        $hospital = Hospital::find($hospital_id);
        $doctors = $hospital->doctors;
        return view('doctors.doctors', compact('doctors'));

//        $hospital = Hospital::with('doctors')->get('$hospital_id');

    }

    //get all hospitals that has doctors
    public function hospitalsHasDoctors()
    {
        return $hospitals = Hospital::whereHas('doctors')->get();
    }

    public function hospitalsHasOnlyMaleDoctors()
    {

        //return hospitals Has Only Male Doctors
        /*return $hospitals = Hospital::whereHas('doctors',function ($q){
            $q -> where('gender',1);
        })->get();*/

        //return hospitals Has Only Male Doctors with doctors data
        return $hospitals = Hospital::with('doctors')->whereHas('doctors', function ($q) {
            $q->where('gender', 1);
        })->get();
    }

    public function hospitalsNotHasDoctors()
    {
        return $hospitals = Hospital::whereDoesntHave('doctors')->get();
    }

    public function deleteHospital($hospital_id)
    {
        $hospital = Hospital::find($hospital_id);
        //return not found or you can use findOrFail
        if (!$hospital)
            return abort('404');

        //delete all doctors in this hospital
//        $hospital -> doctors -> delete();
        foreach ($hospital->doctors as $doctor)
            $doctor->delete();
        // delete hospital
        $hospital->delete();

        return redirect(route('hospital.all'))->with(['success' => 'Deleted Successfully']);

    }

    ################# End One to many ################

    public function getDoctorServices()
    {
        $doctor = Doctor::with('services')->find(3);
        return $doctor;
    }

    public function getServicesDoctor()
    {
        $service = Service::with(['doctors' => function ($q) {
            $q->select('doctors.id', 'name', 'title');
        }])->find(1);
        return $service;
    }

    public function getDoctorServicesById($doctor_id)
    {
        $doctor = Doctor::find($doctor_id);
        $services = $doctor->services;

        $doctors = Doctor::select('id', 'name')->get();
        $allServices = Service::select('id', 'name')->get();

        return view('doctors.services', compact('services', 'doctors', 'allServices'));

    }

    public function SaveServicesToDoctors(Request $request)
    {
        $doctor = Doctor::find($request->doctorId);
        if (!$doctor)
            return abort('404');
//        $doctor -> services()-> attach($request -> servicesId); //problem -> didn't check it service is already in db
//        $doctor -> services()-> sync($request -> servicesId); //solve the problem And it will delete old data and replace with newData

        $doctor->services()->syncWithoutDetaching($request->servicesId); //without delete old Data

        return 'success';
    }

    public function getPatientDoctor()
    {
        $patient = Patient::find(1);
        return $patient -> doctor;

    }

    public function getCountryDoctors(){
//        $country = Country::find(1);
//        return $country -> doctors;
        $country = Country::find(1);
        return $country -> doctors;

    }

    public function getDoctors(){
        /*
        $doctors = Doctor::select('id','name','gender')->get();
        if (isset($doctors) && $doctors -> count()>0){
            foreach ($doctors as $doctor){
                $doctor -> gender = $doctor -> gender == 1?'male':'female';
            }
        }
        return $doctors;
        */
        // with accessors
        return $doctors = Doctor::select('id','name','gender')->get();

    }
}
