<?php

namespace App\Livewire;

use App\Models\City;
use Livewire\Component;
use App\Models\Product;
use App\Models\Property;

class HomeController extends Component {
    public function render() {
        $cities = City::orderBy('name','ASC')->get();        
        $properties = Property::where('status',1)->orderBy('id','DESC')->take(4)->get();

        $data['properties'] = $properties;        
        $data['cities'] = $cities;  
        
        return view("livewire.home",$data);
    }
    
}