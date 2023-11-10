<?php

namespace App\Http\Controllers;

use App\Models\ParkingSpace;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Webmozart\Assert\Tests\StaticAnalysis\resource;

class ParkingSpaceController extends Controller
{
    public function createForm(){
        return view('parkingSpace/create');
    }
    public function fileUpload(Request $req){
        $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);
        $fileModel = new File;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
        }
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
