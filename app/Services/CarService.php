<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class CarService
{
    static public function getAvailableCar($date, $user, array $filter) {
        $availableCars = DB::select("
            select available_cars.id, available_cars.model as model, available_cars.photo, available_cars.grade as grade, drivers.full_name as driver  from 
                (select cars.id, cars.model, cars.photo, cars.grade
                from (select cars.id, cars.model, cars.photo, cars.grade from users, cars where users.name = '$user->name' and users.grade >= cars.grade) as cars
            left join 
                (select car_id from user_cars where busy_time='$date') as busy_cars
            on cars.id = busy_cars.car_id
            where busy_cars.car_id is null) as available_cars
                join drivers
                on available_cars.id = drivers.id
			where available_cars.grade like '%$filter[grade]%' and model like '%$filter[model]%';
        ");
        return $availableCars;
    }
}
