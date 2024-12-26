<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Amenity;
use Livewire\Component;
use App\Models\Category;
use App\Models\Property;
use Livewire\Attributes\Url;

class PropertyDetails extends Component
{

    #[Url]
    public $blogID = null;

    public function mount($id){
        $this->blogID = $id;        
    }

    public function render() {        
        $amenities = Amenity::all();
        $properties = Property::
            select('properties.*','cities.name as city_name')
            ->leftJoin('cities','cities.id','properties.city_id')
            ->findOrFail($this->blogID);       

        return view('livewire.propertyDetails', [
            'properties' => $properties,
            'amenities' => $amenities
        ]);
    }
}