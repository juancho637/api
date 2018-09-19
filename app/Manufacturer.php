<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = [
        'name', 'phone',
    ];

    protected $hidden = [
        'created_at', '	updated_at'
    ];

    public function vehicles(){
        return $this->hasMany('App\Vehicle');
    }
}
