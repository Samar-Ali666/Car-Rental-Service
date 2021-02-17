<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [

    	'user_id', 'car_id', 'days', 'type', 'total', 'firstName', 'lastName',
    	'email', 'address', 'contact', 'city', 'zip',
    ];

    public function car() {

    	return $this->belongsTo('App\Models\Car');
    }

    public function user() {

    	return $this->belongsTo('App\Models\User');
    }
}
