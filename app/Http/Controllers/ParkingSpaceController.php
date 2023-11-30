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


    public function store(Request $request) {

        // Validate your request if needed
        $request->validate([
            'editorContent' => 'required',
        ]);
        $newParking = new ParkingSpace();
        $newParking->user_id = 1;
        $newParking->picture = '';
        $newParking->description = $request->editorContent;
        $newParking->rules ='';

        $newParking->save();


        $imagePath = $this->storeFile($request, 'image', 'images');
        $pdfPath = $this->storeFile($request, 'pdf', 'pdfs');

        $newParking->pdf_path = $pdfPath;
        $newParking->picture = $imagePath;

        $newParking->save();

        $inputNames = ["year", "month", "day", "special", "additional"];
        foreach ($inputNames as $inputName) {
            $this->saveInput($request, $inputName, $newParking->id);
        }

        return redirect(route('parkingSpace.show', $newParking->id));

    }

    private function storeFile(Request $request, string $fileKey, string $storagePath)
    {
        $filePath = null;

        if ($request->hasFile($fileKey)) {
            $filePath = $request->file($fileKey)->store($storagePath, 'public');
        }

        return $filePath;
    }

    private function saveInput(Request $request, string $name, int $id)
    {
        $reference = "${name
}

Count";
        if (
$request->$reference === null) {
            return;
        }
        $table = $this->chooseTable($name);

        for ($i = 1; $i <= $request->$reference; $i++) {
            $inputName = "${name}${i}";
            $table->post_id = $id;
            $table->text = $request->$inputName;
            $table->save();
        }
    }

    private function chooseTable($name)
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

    public function houseRules(ParkingSpace $parkingSpace, $description) {
        $rules = ParkingSpace::findOrFail($description);

        return view('parkingSpace.houseRules', ['rules' => $rules]);
    }
}
