<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'slug', 'buy_sell', 'city_id', 'area_id', 'developer_id', 'property_images', 'price', 'cover_photo', 'address', 'launch_date', 'average_price', 'possession_date', 'possession_status', 'contact_seller', 'google_location', 'size', 'bhk_type', 'project_area', 'project_size', 'rera', 'content', 'nearby_places', 'amenities', 'status'];
    protected $casts = [
        'property_images' => 'array',
        'amenities' => 'array',
    ];
    

    public function getCity(){
        return $this->hasOne('App\Models\City','id','city_id');
    }

    public function getArea(){
        return $this->hasOne('App\Models\Area','id','area_id');
    }

    public function getDeveloper(){
        return $this->hasOne('App\Models\Developer','id','developer_id');
    }

    public function getAmenity(){
        return $this->hasMany('App\Models\Amenity','id','amenities');
        // return $this->belongsToMany(Amenity::class)
        //     ->whereIn('id', $this->amenities ?? []);
    }

}