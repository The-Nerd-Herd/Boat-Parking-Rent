<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Daily;
use App\Models\Monthly;
use App\Models\ParkingSpace;
use App\Http\Controllers\Controller;
use App\Models\Special;
use App\Models\yearly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\error;
use function Webmozart\Assert\Tests\StaticAnalysis\resource;

class ParkingSpaceController extends Controller
{
    public function createForm()
    {
        return view('parkingSpace.create');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return abort(404);
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


        $newParking->user_id = 1;
        $newParking->description = "asddd";


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store(
                'images',
                'public'
            );
        }
        $pdfPath = null;
        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store(
                'pdfs',
                'public'
            );
        }
        $newParking->pdf_path = $pdfPath;
        $newParking->picture = $imagePath;

        $newParking->save();
        // note to self, only the js is being sent to the database
        // not the original input fields
        $this->saveInput($request, "year", $newParking->id);
        $this->saveInput($request, "month", $newParking->id);
        $this->saveInput($request, "day", $newParking->id);
        $this->saveInput($request, "special", $newParking->id);
        $this->saveInput($request, "additional", $newParking->id);
        return redirect(route('parkingSpace.show', $newParking->id));

    }

    function saveInput(Request $request, string $name, int $id)
    {
        $reference = "${name}Count";
        if ($request->$reference == null) return;
        for ($i = 0; $i <= $request->$reference; $i++) {
            $inputname = "${name}${i}";
            $table = $this->chooseTable($name);
            $table->post_id = $id;
            $table->text = $request->$inputname;
            $table->save();

        }
    }

    function chooseTable($name)
    {
        switch ($name) {
            case "year":
                return new Yearly();

            case "month":
                return new Monthly();

            case "day":
                return new Daily();

            case "special":
                return new Special();

            case "additional":
                return new Additional();
            default:
                break;

        }
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
