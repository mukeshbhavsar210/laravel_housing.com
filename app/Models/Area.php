<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'slug', 'city_id', 'status'];

    public function getCity(){
        return $this->hasOne('App\Models\City','id','city_id');
    }
}
