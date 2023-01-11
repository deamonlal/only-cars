<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\CarService;

class CarController extends \App\Http\Controllers\Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getAvailableCar(Request $request) {
        $date = (is_null($request->date)) ? date('d.m.y') : $request->date;
        $user = Auth::user();
        $availableCars = CarService::getAvailableCar($date, $user);
        return $availableCars;
    }

}
