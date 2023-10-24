<?php

namespace App\Http\Controllers;

use App\Models\ParkingSpace;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Webmozart\Assert\Tests\StaticAnalysis\resource;

class ParkingSpaceController extends Controller
{
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


        dd($request);

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
