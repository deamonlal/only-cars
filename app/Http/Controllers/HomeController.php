<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use App\Models\UserCar;
use App\Models\Driver;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    //select car_id from user_cars where busy_time='$date'
    //select cars.id, cars.model, cars.photo, cars.grade from users, cars where users.name = '$user->name' and users.grade >= cars.grade

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request) {
        $validated = $request->validate([
            'date' => 'required',
        ]);
        return redirect()->route('cars', [
                    'date' => $request->date,
                    'grade' => $request->grade,
                    'model' => $request->model
        ]);
    }

}
