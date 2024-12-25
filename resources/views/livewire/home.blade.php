<div class="container">
    <section class="searchHome">
    <h2>Properties to buy in Bengaluru</h2>
    <nav>
        <div class="nav nav-tabs" >
            <a href=" " class="nav-link active">Buy</a>
            <a href=" " class="nav-link">Rent</a>
        </div>
        </nav>

        <div class="shadow p-4">
            <div class="row">
                <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                <div class="row">
                <select name="city" class="form-control">
                    <option value="">Select a City</option>
                    @if ($cities->isNotEmpty())
                        @foreach ($cities as $city)
                            <option value="">{{ $city->name }}</option>
                        @endforeach
                    @endif	
                </select>

                <select name="city" id="area" class="form-control">
                    <option>Select Area</option>                        
                    @if ($areas->isNotEmpty())
                        @foreach ($areas as $area)                        
                            <option value="{{ route('area').'?areaSlug='.$area->slug }}">{{ $area->name }}</option>
                        @endforeach
                    @endif
                </select>
                </div>
            </div>
        </div>
    </section>

    <section class="section-3">
        <div class="container">           
            <div class="row">
                @if ($properties->isNotEmpty())
                    @foreach ($properties as $property)
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <a href="{{ route('propertyDetail',$property->id )}}">
                                        @if (!empty($property->cover_photo))
                                            <img src="{{ asset('storage/'.$property->cover_photo )}}"   width="50" >
                                        @else
                                            <img src="{{ asset('images/default-150x150.png') }}" alt=""   width="50"  />
                                        @endif
                                        <p>{{ $property->name }}</p>
                                        <p class="card-text">{{ $property->getArea->name }}</p>                                                
                                    </div>
                                </a>
                            </div>                
                        </div>
                    @endforeach
                @endif
            </div>                   
        </div>
    </section>
</div>