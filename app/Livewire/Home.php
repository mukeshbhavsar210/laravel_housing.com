<?php

namespace App\Livewire;

use App\Models\Area;
use App\Models\City;
use App\Models\Property;
use Livewire\Component;
use Livewire\Attributes\Url;

class Home extends Component
{
    #[Url]
    public $citySlug = null;
    public $areaSlug = null;    

    public function render()
    {
        $cities = City::all();
        $areas = Area::all();
        $paginate = 5;

        if(!empty($this->areaSlug)) {
            $area = Area::where('slug',$this->areaSlug)->first();

            if(empty($area)){
                abort(404);
            }                       

            $properties = Property::orderBy('created_at','DESC')                        
                ->where('area_id',$area->id)
                ->where('status',1)
                ->take(2)
                ->paginate($paginate);
        } else {
            $properties = Property::orderBy('created_at','DESC')
                ->where('status',1)
                ->take(2)
                ->paginate($paginate);
        } 
               
        return view('livewire.home', [
            'properties' => $properties,
            'cities' => $cities,
            'areas' => $areas,
        ]);
    }
}