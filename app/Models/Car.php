<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [

    	'category_id',
    	'photo_id',
    	'name',
    	'description',
    	'rent'
    ];

    public function photo() {

    	return $this->belongsTo('App\Models\Photo');
    }

    public function category() {

    	return $this->belongsTo('App\Models\Category');
    }

    public function booking() {

        return $this->hasMany('App\Models\Booking');
    }
}
