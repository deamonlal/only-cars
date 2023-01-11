<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

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
