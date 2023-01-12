<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\CarService;
use App\Models\UserCar;

class CarController extends Controller {

    public function index(Request $request) {
        $date = (is_null($request->date)) ? date('d.m.y') : $request->date;
        $user = Auth::user()->name;
        $filter = [
            'grade' => $request->grade,
            'model' => $request->model
        ];

        $availableCars = CarService::getAvailableCar($date, $user, $filter);
        return view('cars', [
            'cars' => $availableCars,
            'date' => $date
        ]);
    }

    public function reserve(Request $request) {
        $user = Auth::user();
        $userCar = new UserCar();
        $userCar->car_id = $request->car_id;
        $userCar->user_id = $user->id;
        $userCar->busy_time = $request->date;
        $userCar->save();
        return view('reserve');
    }

}
