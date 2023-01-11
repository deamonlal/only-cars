<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCar extends Model
{
    use HasFactory;
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'car_id',
        'user_id',
        'busy_time',
    ];
	
	/**
	 * Get user
	 */
	public function user() {
		return $this->belongsTo(User::class);
	}
	
	/**
	 * Get car
	 */
	public function car() {
		return $this->belongsTo(Car::class);
	}
}
