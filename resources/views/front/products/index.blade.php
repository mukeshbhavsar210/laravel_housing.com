@extends('front.layouts.app')

@section('content')

    <section class="section-7 pt-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner bg-light">     
                            @if ($properties->property_images > 0)
                                @foreach($properties->property_images as $image)
                                    <img loading="lazy" decoding="async" src="{{ asset('storage/'.$image )}}" alt="Post Thumbnail">
                                @endforeach            
                                @else
                                    <img src="{{ asset('images/default-150x150.png') }}" alt="" class="img-thumbnail" width="50"  />
                                @endif
                        </div>
                        <a class="carousel-control-prev" href="#product-carousel" data-bs-slide="prev">
                            <i class="fa fa-2x fa-angle-left text-dark"></i>
                        </a>
                        <a class="carousel-control-next" href="#product-carousel" data-bs-slide="next">
                            <i class="fa fa-2x fa-angle-right text-dark"></i>
                        </a>
                    </div>                    
                </div>
                <div class="col-md-8">
                    <div class="bg-light">
                        <h1>{{ $properties->name }}</h1>
                        <span class="price"> ₹{{ $properties->price }}</span>

                        @if ($properties->price > 0)
                            <span class="price text-secondary"><del> ₹{{ $properties->price }}</del></span>
                        @endif
                    
                        <div class="mt-2">{!! $properties->content !!}</div>
                    </div>
                </div> 
            </div>
        </div>
    </section>

@endsection

@section('customJs')
@endsection
