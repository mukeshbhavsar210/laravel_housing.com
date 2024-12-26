<?php

namespace App\Livewire;

use App\Models\Amenity;
use Livewire\Component;
use App\Models\Area;
use App\Models\City;
use App\Models\Property;
use Livewire\Attributes\Url;
use Illuminate\Http\Request;

class PropertySearch extends Component
{
    #[Url]
    //public $citySlug = null;
    public $areaSlug = null;   
     
    public function render(Request $request,)
    {
        $cities = City::all();
        $areas = Area::all();
        $amenitiesArray = [];
        $paginate = 5;

        $amenities = Amenity::orderBy('name','ASC')->where('status',1)->get();

        if(!empty($this->areaSlug)) {
            $area = Area::where('slug',$this->areaSlug)->first();

            if(empty($area)){
                abort(404);
            }                       

            $properties = Property::orderBy('created_at','DESC')                        
                ->where('area_id',$area->id)
                ->where('status',1)
                ->paginate($paginate);

            $amenities = Amenity::orderBy('name','ASC')->where('status',1)->get();
        } else {
            $properties = Property::orderBy('created_at','DESC')
                ->where('status',1)
                ->paginate($paginate);
        } 
        
        if(!empty($request->get('amenity'))) {
            $amenitiesArray = explode(',',$request->get('amenity'));
            $properties = $properties->whereIn('amenities',$amenitiesArray);
        }

        $data['properties'] = $properties;
        $data['cities'] = $cities;
        $data['areas'] = $areas;
        $data['amenities'] = $amenities;
        $data['amenitiesArray'] = $amenitiesArray;

        return view('livewire.property-search', $data);
    }
}
