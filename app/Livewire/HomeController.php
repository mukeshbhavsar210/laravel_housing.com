<?php

namespace App\Livewire;

use App\Models\City;
use Livewire\Component;
use App\Models\Property;

class HomeController extends Component {
    public function render() {
        $cities = City::orderBy('name','ASC')->get();        
        $properties = Property::where('status',1)->orderBy('id','DESC')->take(4)->get();
        $latestProperties = Property::where('status',1)->orderBy('id','DESC')->take(10)->get();
        $carousal = Property::where('status',1)->orderBy('id','DESC')->take(3)->get();

        $data['properties'] = $properties;        
        $data['latestProperties'] = $latestProperties;   
        $data['carousal'] = $carousal;   
        $data['cities'] = $cities;  
        
        return view("livewire.index", $data);
    }    
}