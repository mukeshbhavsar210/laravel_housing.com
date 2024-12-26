<?php

use App\Mail\OrderEmail;
use App\Models\Category;
use App\Models\Country;
use App\Models\Order;
use App\Models\Page;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Mail;

    // function getCategories(){
    //     return Category::orderBy('name','ASC')->with('sub_category')->take(4)->orderBy('id','DESC')->where('status',1)->where('showHome','Yes')->get();
    // }

    // function getProductImage($productId){
    //     return ProductImage::where('product_id',$productId)->first();
    // }
?>
