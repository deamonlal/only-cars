<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'model',
        'grade',
        'photo',
    ];
	
	/**
	 * Get driver
	 * @return type
	 */
	public function driver() {
		return $this->hasOne(Driver::class);
	}
	
	/**
	 * Get user car relation
	 * @return type
	 */
	public function userCar() {
		return $this->hasOne(UserCar::class);
	}
}
