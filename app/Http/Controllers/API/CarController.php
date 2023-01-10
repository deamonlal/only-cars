<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CarController extends \App\Http\Controllers\Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getAvailableCar(Request $request) {
        die('kek');
        $date = (is_null($request->date)) ? date('d.m.y') : $request->date;
        $user = Auth::user();
        return $user;
        $availableCars = DB::select("
            select cars.id as id, cars.model as model 
                from (select cars.id, cars.model from users, cars where users.name = '' and users.grade >= cars.grade) as cars
            left join 
                (select car_id from user_cars where busy_time='05.12.23') as busy_cars
            on cars.id = busy_cars.car_id
            where busy_cars.car_id is null;
        ");
        $cars = \App\Models\Car::all();

        return $availableCars;
    }

}
