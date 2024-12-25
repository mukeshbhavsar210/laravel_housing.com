<div>
    
    <div class="container-fluid">
        <div class="row">                        
            <div class="col-md-9">
                @if ($properties->isNotEmpty())
                @foreach ($properties as $property)
                    <div class="propertyDetails">                        
                        <div class="row">
                            <div class="col-md-4">
                                @if ($property->property_images > 0)
                                    @foreach($property->property_images as $image)
                                        <img loading="lazy" decoding="async" src="{{ asset('storage/'.$image )}}" alt="Post Thumbnail">
                                    @endforeach            
                                @else
                                    <img src="{{ asset('images/default-150x150.png') }}" alt="" class="img-thumbnail" width="50"  />
                                @endif
                            </div>
                            <div class="col-md-8">
                                    <a href="{{ route('propertyDetail',$property->id )}}" >
                                        <p class="price">₹ {{ $property->price }}</p>
                                        <p class="name">{{ $property->name }}</p>
                                        <p class="developer">{{ $property->getDeveloper->name }}</p>
                                        <p class="bhk">{{ $property->bhk_type }} {{ $property->buy_sell }}</p>
                                        <div class="greyPart">
                                            <div class="part">
                                                <p>Possession Date</p>
                                                <p>{{ $property->possession_date }}</p>
                                            </div>
                                            <div class="part">
                                                <p>Average Price</p>
                                                <p>{{ $property->average_price }}</p>
                                            </div>
                                            <div class="part">
                                                <p>Possession Status</p>
                                                <p>{{ $property->possession_status }}</p>
                                            </div>
                                        </div>
                                        <p class="card-text">{{ $property->getArea->name }}, {{ $property->getCity->name }}</p>
                                        <p>{{ $property->getAminity->name }}</p>
                                    </a>
                                </div>
                            </div>                            
                        </div>                
                    @endforeach
                @endif
                {{-- {{ $property->withQueryString()->links() }} --}}
            </div>
            <div class="col-md-3">
                <h3>Filters</h3>
                @if ($amenities->isNotEmpty())
                    @foreach ($amenities as $amenity)
                        <div class="form-check mb-2">
                            <input {{ (in_array($amenity->id, $amenitiesArray)) ? 'checked' : '' }} class="form-check-input aminity-label" type="checkbox" name="amenity[]" value="{{ $amenity->id }}" id="amenity-{{ $amenity->id }}">
                            <label class="form-check-label" for="amenity-{{ $amenity->id }}">
                                {{ $amenity->name }}
                            </label>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        
    </div>
    
    <script>
        $(".aminity-label").change(function(){
            apply_filters();
        });

        function apply_filters(){
            var amenities = [];
            $(".aminity-label").each(function(){
                if ($(this).is(":checked") == true){
                    amenities.push($(this).val());
                }
            });

            var url = '{{ url()->current() }}?';

            //Aminity filter
            if (amenities.length > 0) {
                url += '&aminity='+amenities.toString();
            }

            window.location.href = url;
        }

    </script>
</div>