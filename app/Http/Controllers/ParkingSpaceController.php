<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Daily;
use App\Models\Monthly;
use App\Models\ParkingSpace;
use App\Http\Controllers\Controller;
use App\Models\Special;
use App\Models\Yearly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\error;
use function Webmozart\Assert\Tests\StaticAnalysis\resource;
use Symfony\Component\DomCrawler\Crawler;

class ParkingSpaceController extends Controller
{

    /**
     * Display a listing of the resource.
     */
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
        $textContent=null;
        // Getting house rules
        if($request->houseRules != null){
            $crawler = new Crawler($request->houseRules);
            $textContent =$crawler->filterXPath('//div[1]')->html();
        }
        $newParking = new ParkingSpace();
        $newParking->user_id = $request->user()->id;
        $newParking->title = $request->title;
        $newParking->street = $request->street;
        $newParking->number = $request->streetNumber;
        $newParking->city = $request->city;
        $newParking->rules = $textContent;
        $imagePath = $this->storeFile($request, 'image', 'images');
        $pdfPath = $this->storeFile($request, 'pdf', 'pdfs');
        $newParking->pdf_path = $pdfPath;
        $newParking->picture = $imagePath;
        $newParking->save();



        // Adding things to other table
        $inputNames = ["year", "month", "day", "special", "additional"];
        foreach ($inputNames as $inputName){
            $this->saveToOtherTables($request,$inputName,$newParking->id);
        }

        foreach ($inputNames as $inputName) {
            $this->saveInput($request, $inputName, $newParking->id);
        }

        return redirect(route('parkingSpace.show', $newParking->id));

    }

    function saveToOtherTables($request,$name, $id){
        if($request->$name == null) return;
        $newRow = $this->chooseTable($name);
        $newRow->parking_space_id = $id;
        $newRow->text = $request->$name;
        $price ="${name}Price";
        if($name != "additional") $newRow->price = $request->$price;
        $newRow->save();
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
        $inputReference = "${name}Count";
        if (
            $request->$inputReference === null) {
            return;
        }
        for ($i = 1; $i <= $request->$inputReference; $i++) {
            $table = $this->chooseTable($name);
            $inputName = "${name}${i}";
            $price ="${name}Price${i}";
            $table->parking_space_id = $id;
            $table->text = $request->$inputName;
            if($name != "additional") $table->price = $request->$price;
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
        return view('parkingSpace.edit',['parkingSpace' =>$parkingSpace]);
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
