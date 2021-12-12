<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    use OfferTrait;

    public function create()
    {
        //view form and add this offer
        return view('ajaxoffers.create');
    }

    public function store(Request $request)
    {
        // save offer into db using AJAX
        // save photo in fileSystem
        $file_name = $this->saveImage($request->photo, 'image/offers');

        //insert data
        $offer = Offer::create([
            'photo' => $file_name,
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details
        ]);
        if ($offer)
            return response()->json([
                'status' => true,
                'msg' => 'Saved Successfully',
            ]);//= return redirect back
        else {
            return response()->json([
                'status' => false,
                'msg' => 'Failed to save',
            ]);
        }
    }

    public function getAllOffers()
    {
        $offers = Offer::select('id', 'photo', 'name', 'price', 'details')->get();
        return view('ajaxoffers.all', compact('offers'));
    }

    public function delete(Request $request)
    {
        $offer = Offer::find($request->id);
        if (!$offer)
            return redirect()->back()->with(['error' => 'Offer not exist']);
        $offer->delete();
        if ($offer)
            return response()->json([
                'status' => true,
                'msg' => 'Deleted Successfully',
                'id' => $request->id
            ]);//= return redirect back
    }

    public function edit(Request $request)
    {
//        Offer::findOrFail($offer_id);
        $offer = Offer::find($request->offer_id);
        if (!$offer)
            return response()->json([
                'status' => false,
                'msg' => 'Offer not existed',
            ]);

        $offer = Offer::select('id', 'photo', 'name', 'price', 'details')->find($request->offer_id);
        return view('ajaxoffers.edit', compact('offer'));
    }

    public function update(Request $request)
    {
//        Offer::findOrFail($offer_id);
        $offer = Offer::find($request->offer_id);
        if (!$offer)
            return response()->json([
                'status' => false,
                'msg' => 'Offer not existed',
            ]);
        $file_name = $this->saveImage($request->photo, 'image/offers');
//        $offer->update($request->all());
        $offer->update([
            'photo' => $file_name,
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details
        ]);

        return response()->json([
            'status' => true,
            'msg' => 'Saved Successfully',
        ]);

    }
}

