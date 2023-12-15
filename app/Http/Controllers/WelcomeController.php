<?php

namespace App\Http\Controllers;

use App\Models\ParkingSpace;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parkingSpaces = ParkingSpace::all()->take(5);
        return view('home.welcome', compact('parkingSpaces'));
    }
}
