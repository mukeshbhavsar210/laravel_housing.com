<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Property as ModelsProperty;
use Livewire\Component;
use Livewire\Attributes\Url;

class Property extends Component
{
    #[Url]
    public $blogID = null;

    public function mount($id){
        $this->blogID = $id;        
    }

    public function render()
    {        
        $property = ModelsProperty::
            select('properties.*','cities.name as city_name',
                                    'areas.name as area_name',
                                    'developers.name as developer_name',
                                    'amenities.name as amenity_name',
                                    )
            ->leftJoin('cities','cities.id','properties.city_id')
            ->leftJoin('areas','areas.id','properties.area_id')
            ->leftJoin('developers','developers.id','properties.developer_id')
            ->leftJoin('amenities','amenities.id','properties.amenities')
            ->findOrFail($this->blogID);            
        return view('livewire.propertyDetails', [
            'property' => $property
        ]);
    }

}
