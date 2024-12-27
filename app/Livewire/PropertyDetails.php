<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Area;
use App\Models\Amenity;
use Livewire\Component;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyDetails extends Component
{
    public function render(Request $request, $categorySlug = null, $subCategorySlug = null) { 
        $categorySelected = ' ';
        $subCategorySelected = ' ';
        $amenityArray = [];

        $amenities = Amenity::orderBy('name','ASC')->where('status',1)->get();
        $cities = City::orderBy("name","ASC")->with('sub_category')->where('status',1)->get();
        $properties = Property::where('status',1);

        //Apply filters here
        if(!empty($categorySlug)) {
            $city = City::where('slug',$categorySlug)->first();
            $properties = $properties->where('city_id',$city->id);
            $categorySelected = $city->id;
        }

        if(!empty($subCategorySlug)) {
            $subCategory = Area::where('slug',$subCategorySlug)->first();
            $properties = $properties->where('area_id',$subCategory->id);
            $subCategorySelected = $subCategory->id;
        }

        if(!empty($request->get('amenities'))) {
            $amenityArray = explode(',',$request->get('amenities'));
            $properties = $properties->whereIn('amenities_id',$amenityArray);        
        }

        // Price slider
        if($request->get('price_max') != '' && $request->get('price_min') != '') {
            if($request->get('price_max') == 1000){
                $properties = $properties->whereBetween('price',[intval($request->get('price_min')),1000000]);
            } else {
                $properties = $properties->whereBetween('price',[intval($request->get('price_min')),intval($request->get('price_max'))]);
            }
        }        

        if($request->get('sort') != ''){
            if($request->get('sort') == 'latest'){
                $properties = $properties->orderBy('id','DESC');
            } else if($request->get('sort') == 'price_asc') {
                $properties = $properties->orderBy('price','ASC');
            } else {
                $properties = $properties->orderBy('price','DESC');
            }
        } else {
            $properties = $properties->orderBy('id','DESC');
        }

        $properties = $properties->paginate(10);

        $data['cities'] = $cities;
        $data['amenities'] = $amenities;
        $data['properties'] = $properties; 
        $data['categorySelected'] = $categorySelected;
        $data['subCategorySelected'] = $subCategorySelected;
        $data['amenityArray'] = $amenityArray;
        $data['priceMax'] = (intval($request->get('price_max')) == 0 ? 10000000 : $request->get('price_max'));
        $data['priceMin'] = intval($request->get('price_min'));
        $data['sort'] = $request->get('sort');

        return view('livewire.propertyDetails',$data);
    }




    public function property($slug, $categorySlug = null, $subCategorySlug = null){
        $properties = Property::where('slug',$slug)->first();

        if($properties == null){
            abort(404);
        }

        $data['properties'] = $properties; 
        
        return view('front.products.index',$data);
    }
}