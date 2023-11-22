<?php

namespace App\Http\Controllers;

use App\Models\ParkingSpace;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Webmozart\Assert\Tests\StaticAnalysis\resource;

class ParkingSpaceController extends Controller
{
    public function createForm()
    {
        return view('parkingSpace/create');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('parkingSpace.show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parkingSpace.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
//
//        $imageName = time().'.'.$request->image->extension();
//
//        $request->image->move(public_path('images'), $imageName);

        $newParking = new ParkingSpace();
        $newParking->user_id =1;
        $newParking->title ="asd";
        $newParking->street="hihi";
        $newParking->number=132;
        $newParking->city="Cigány";
        $newParking->description="asddd";
        $newParking->dailyTariff=69;

        if ($request->inputCount != null) {
            for ($i = 1; $i <= $request->inputCount; $i++) {
                $inputname = "input${i}";
                dump($request->$inputname);
            }
        }

        $imagePath =null;
        if ($request->hasFile('image')){
            $imagePath= $request->file('image')->store(
                'images',
                'public'
            );
        }
        $newParking->picture=$imagePath;

        $newParking->save();

        return redirect(route('parkingSpace.show',$newParking->id));

    }

    /**
     * Display the specified resource.
     */
    public function show(ParkingSpace $parkingSpace)
    {
        return view('parkingSpace.show', ['parkingSpace' => $parkingSpace]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ParkingSpace $parkingSpace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ParkingSpace $parkingSpace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParkingSpace $parkingSpace)
    {
        //
    }
}
