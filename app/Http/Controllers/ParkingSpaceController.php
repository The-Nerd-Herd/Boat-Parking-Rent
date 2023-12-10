<?php

namespace App\Http\Controllers;

use App\Models\ParkingSpace;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParkingSpaceController extends Controller
{
    public function index(){
        $parkingSpaces = ParkingSpace::all();
        return view('parkingSpace.index', compact('parkingSpaces'));
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
        return view('test',compact('request'));
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

    public function fromOldToNew()
    {
        $parkingSpaces = ParkingSpace::orderBy('created_at', 'DESC')->get();
        return view(('parkingSpace.index'), compact('parkingSpaces'));
    }

    public function fromNewToOld()
    {
        $parkingSpaces = ParkingSpace::orderBy('created_at', 'ASC')->get();
        return view(('parkingSpace.index'), compact('parkingSpaces'));
    }
}
