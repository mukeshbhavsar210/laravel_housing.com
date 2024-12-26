<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index(){
        $products = Product::where('is_featured','Yes')->orderBy('id','DESC')->take(4)->where('status',1)->get();
        //$latestProducts = Product::orderBy('id','DESC')->where('status',1)->take(4)->get();
        //$data['latestProducts'] = $latestProducts;
        $data['featuredProducts'] = $products;        
        
        return view("livewire.home",$data);
    }
}