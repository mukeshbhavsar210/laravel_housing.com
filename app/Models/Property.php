<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'slug', 'buy_sell', 'city_id', 'area_id', 'developer_id', 'property_images', 'price', 'cover_photo', 'address', 'launch_date', 'average_price', 'possession_date', 'possession_status', 'contact_seller', 'google_location', 'size', 'bhk_type', 'project_area', 'project_size', 'rera', 'content', 'nearby_places', 'amenities', 'status'];
    protected $casts = [
        'property_images' => 'array',
        'amenities' => 'array',
    ];

    protected static function booted(): void {
        static::addGlobalScope('property', function (Builder $query) {
            if (auth()->hasUser()) {
                $query->where('user_id', auth()->user()->id);
            } 
        });       
    }

    public function name(){
        return $this->belongsTo( Property::class, 'name', 'id' );
    }

    public function getRole(){
        return $this->hasOne('App\Models\User','id','role');
    }

    public function getCity(){
        return $this->hasOne('App\Models\City','id','city_id');
    }

    public function getAminity(){
        return $this->hasOne('App\Models\Amenity','id','amenities');
    }

    public function getArea(){
        return $this->hasOne('App\Models\Area','id','area_id');
    }

    public function getDeveloper(){
        return $this->hasOne('App\Models\Developer','id','developer_id');
    }

    public function getAmenity(){
        return $this->hasMany('App\Models\Amenity','id','amenities');
    }
}