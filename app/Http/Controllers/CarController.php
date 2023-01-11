<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\CarService;

class CarController extends Controller
{
    public function index(Request $request) {
        $date = (is_null($request->date)) ? date('d.m.y') : $request->date;
        $user = Auth::user();
        $availableCars = CarService::getAvailableCar($date, $user);
        return view('cars', ['cars' => $availableCars]);
    }
}
