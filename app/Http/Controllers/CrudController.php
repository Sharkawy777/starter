<?php

namespace App\Http\Controllers;

use App\Events\VideoViewer;
use App\Models\Offer;
use App\Models\Video;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    use OfferTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

//    public function getOffers()
//    {
//        return Offer::select('id', 'name')->get();
//    }

    /* public function store()
     {
         Offer::create([
             'name' => 'offer2',
             'price' => '3000',
             'details' => 'offer2 details'
         ]);
     }*/
    public function create()
    {
        return view('offers.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $rules = $this->getRules();
        $messages = $this->getMessages();

        //validate data before insert
        $validator = Validator::make($inputs, $rules, $messages);
        if ($validator->fails()) {
//            return $validator->errors()->first();//$validator->errors(); return all error
            return redirect()->back()->withErrors($validator)->withInputs($inputs);
        }
        // save photo in fileSystem
        $file_name = $this->saveImage($request->photo, 'image/offers');

        //insert data
        Offer::create([
            'photo' => $file_name,
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details
        ]);
        return redirect()->back()->with(['success' => 'تم إضافة العرض بنجاح!']);

    }


    public function getAllOffers()
    {
        $offers = Offer::select('id', 'photo', 'name', 'price', 'details')->get();
        return view('offers.all', compact('offers'));
    }

    public function editOffer($offer_id)
    {
//        Offer::findOrFail($offer_id);
        $offer = Offer::find($offer_id);
        if (!$offer_id)
            return redirect()->back();

        $offer = Offer::select('id', 'name', 'price', 'details')->find($offer_id);
        return view('offers.edit', compact('offer'));
    }

    public function deleteOffer($offer_id)
    {
        $offer = Offer::find($offer_id);
        if (!$offer)
            return redirect()->back()->with(['error'=>'Offer not exist']);
        $offer -> delete();
        return redirect(route('offers.all',$offer_id))->with(['success'=> 'Deleted Successfully']);

    }

    public function updateOffer(Request $request, $offer_id)
    {
        Offer::findOrFail($offer_id);
        $offer = Offer::find($offer_id);
//        $offer -> update($request -> all());
        $offer->update([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details
        ]);
        return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
    }

    public function getVideo()
    {
        $video = Video::first();
        event(new VideoViewer($video));
        return view('video')->with('video', $video);
    }

    protected function getMessages()
    {
        return $messages = [
//            'name.required' => 'إسم العرض مطلوب!',
            'name.required' => __('messages.name_required'),//__() = trans()
            'price.required' => 'سعر العرض مطلوب!',
            'details.required' => 'تفاصيل العرض مطلوب!',
            'name.max' => 'إسم العرض طويل!',
            'name.unique' => 'إسم العرض موجود بالفعل!',
            'price.numeric' => 'سعر العرض يجب ان يكون أرقام!'
        ];
    }

    protected function getRules()
    {
        return $rules = [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required'
        ];
    }

}
