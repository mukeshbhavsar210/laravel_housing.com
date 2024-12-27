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
    
    public function render($slug){
        $properties = Property::where('slug',$slug)->first();

        if($properties == null){
            abort(404);
        }

        $data['properties'] = $properties; 
        
        return view('livewire.property-search');
    }


    public function product($slug){
        $properties = Property::where('slug',$slug)->first();

        if($properties == null){
            abort(404);
        }

        $data['properties'] = $properties; 
        
        return view('front.products.index',$data);
    }
}
