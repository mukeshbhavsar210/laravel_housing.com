@extends('front.layouts.app')

@section('content')


    <section class="section-6 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <div class="sub-title mt-5"><h2>Price</h3></div>                    
                        <div class="card">
                            <div class="card-body">
                                <input type="text" class="js-range-slider" name="my_range" value="" />
                            </div>
                        </div>                    
                        {{-- Price filters end --}}
                                        
                    <div class="sub-title mt-5"><h2>Amenities</h3></div>                    
                    <div class="card">
                        <div class="card-body">
                            @if ($amenities->isNotEmpty())
                                @foreach ($amenities as $amenity)
                                    <div class="form-check mb-2">
                                        <input {{ (in_array($amenity->id, $amenityArray)) ? 'checked' : '' }} class="form-check-input amenity-label" type="checkbox" name="amenity[]" value="{{ $amenity->id }}" id="amenity-{{ $amenity->id }}">
                                        <label class="form-check-label" for="amenity-{{ $amenity->id }}">
                                            {{ $amenity->name }}
                                        </label>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    {{-- amenity filters end --}}                    
                </div>

                <div class="col-md-9">
                    <div class="row pb-3">
                        <div class="col-12 pb-1">
                            <div class="d-flex align-items-center justify-content-end mb-4">
                                <div class="ml-2">
                                    <select name="sort" id="sort" class="form-control">
                                        <option value="Latest" {{ ($sort == 'latest') ? 'selected' : ' ' }}>Latest</option>
                                        <option value="price_desc" {{ ($sort == 'price_desc') ? 'selected' : ' ' }}>Price High</option>
                                        <option value="price_asc" {{ ($sort == 'price_asc') ? 'selected' : ' ' }}>Price Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        @if ($properties->isNotEmpty())
                            @foreach ($properties as $value)
                                <div class="col-md-6">
                                    <div class="card">
                                        <p>{{ $value->name }}</p>
                                        <p>{{ $value->price }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        </div>
                    
                        <div class="col-md-12 pt-5">
                            {{ $properties->withQueryString()->links() }} 
                        </div>
                    </div>                    
                    {{-- all products end --}}
                </div>
            </div>
        </div>
    </section>

@endsection

@section('customJs')
    <script>
        $(".amenity-label").change(function(){
            apply_filters();
        });

        rangeSlider = $(".js-range-slider").ionRangeSlider({
            type: "double",
            min: 2500000,
            max: 10000000,
            from: {{ ($priceMin) }},
            to: {{ ($priceMax) }},
            step: 10,
            skin: "round",
            max_position: "+",
            prefix: "₹",
            onFinish: function(){
                apply_filters()
            }
        });

        var slider = $(".js-range-slider").data("ionRangeSlider");

        $("#sort").change(function(){
            apply_filters()
        });


        function apply_filters(){
            var amenities = [];
            $(".amenity-label").each(function(){
                if ($(this).is(":checked") == true){
                    amenities.push($(this).val());
                }
            });

            var url = '{{ url()->current() }}?';

            //amenity filter
            if (amenities.length > 0) {
                url += '&amenity='+amenities.toString();
            }

            //Price range filter
            url += '&price_min='+slider.result.from+'&price_max='+slider.result.to;

            //Sorting filter
            var keyword = $('#search').val();
            if(keyword.length > 0){
                url += '&search='+keyword;
            }

            url += '&sort='+$("#sort").val();

            window.location.href = url;
        }
    </script>
@endsection
