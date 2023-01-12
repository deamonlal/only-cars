<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model {

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
    public function userCars() {
        return $this->hasMany(UserCar::class);
    }
    
    public function users() {
        return $this->hasManyThrough(User::class, UserCar::class, 'user_id', 'id', 'id');
    }
}
