<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Car;
use App\Models\User;
use App\Models\UserCar;
use App\Models\Driver;

class CarService
{
    static public function getAvailableCar($date, $user, array $filter) {
        $availableCars = DB::select("
select available_cars.id, available_cars.model as model, available_cars.photo, available_cars.grade as grade, available_cars.driver, available_cars.name	
from (select available_cars.id, available_cars.model as model, available_cars.photo, available_cars.grade as grade, drivers.full_name as driver, available_cars.name
	from 
					(select cars.id, cars.model, cars.photo, cars.grade, cars.name
					from (select cars.id, cars.model, cars.photo, cars.grade, users.name
						from users, cars where users.name = '$user' and users.grade >= cars.grade) as cars
				left join 
					(select car_id from user_cars where busy_time='$date') as busy_cars
				on cars.id = busy_cars.car_id
				where busy_cars.car_id is null) as available_cars
	join drivers
	on available_cars.id = drivers.id
	where available_cars.grade like '%$filter[grade]%' and model like '%$filter[model]%') as available_cars
join (select *
			from users
			left join (select user_id from user_cars where busy_time='$date') as busy_users
			on users.id = busy_users.user_id
			where busy_users.user_id is null 
				and users.name = '$user') as available_user
on available_cars.name = available_user.name
        ");
        return $availableCars;
    }
}