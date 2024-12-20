<div class="container">
<section class="searchHome">
  <h1>Properties to buy in Bengaluru</h1>
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

<section class="section-3 bg-2 py-5">
  <div class="container">
      <div class="row pt-5">
          <div class="job_listing_area">
              <div class="job_lists">
                  <div class="row">
                      @if ($properties->isNotEmpty())
                        @foreach ($properties as $property)
                          <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">

                                  @if (!empty($property->cover_photo))
                                      <img src="{{ asset('storage/'.$property->cover_photo )}}" class="img-thumbnail" width="50" >
                                  @else
                                      <img src="{{ asset('images/default-150x150.png') }}" alt="" class="img-thumbnail" width="50"  />
                                  @endif

                                  <h5 class="card-title">{{ $property->name }}</h5>
                                    <p class="card-text">{{ $property->address }}, {{ $property->getArea->name }}, {{ $property->getCity->name }}</p>
                                    {{ $property->getDeveloper->name }}
                                    {{-- <a href="{{ route('property',$property->buy_sell.'-'.$property->slug.'-'.$property->getArea->slug.'-'.$property->getCity->slug )}}" class="btn btn-primary">View</a> --}}
                                    <a href="{{ route('propertyDetail',$property->id )}}" class="btn btn-primary">View</a>
                                    
                                  </div>
                                </div>                
                            </div>
                          @endforeach
                      @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

</div>