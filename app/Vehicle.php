<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'color', 'cylinder', 'weight', 'power', 'manufacturer_id'
    ];

    protected $hidden = [
        'created_at', '	updated_at'
    ];

    public function manufacturer(){
        return $this->belongsTo('App\Manufacturer');
    }
}
