<?php

namespace App\Http\Controllers;

use App\Http\Resources\HotelResource;
use App\Http\Resources\HotelsResource;
use App\Model\hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
   
    public function index()
    {
        //
        $hotels = hotel::paginate(5);
        return (new HotelsResource($hotels))
            ->response()
            ->setStatusCode(200);
    }


    public function store(Request $request)
    {
        //
        $hotel = hotel::create($request->all());
        return (new HotelResource($hotel))
            ->response()
            ->setStatusCode(201);
    }

    
    public function show($id)
    {
        //
        $hotel = hotel::findOrFail($id);
        return (new HotelResource($hotel))
            ->response()
            ->setStatusCode(200);
    }

   
    public function update(Request $request, $id)
    {
        //
        $hotel = hotel::findOrFail($id);
        $hotel->update($request->all());
        return (new HotelResource($hotel))
            ->response()
            ->setStatusCode(200);
    }


    public function delete($id)
    {
        //
        $hotel = hotel::findOrFail($id);
        $hotel->delete();
        return response() ->json([
            'status' => "Success deleted khs"
        ]); 
    }
}
