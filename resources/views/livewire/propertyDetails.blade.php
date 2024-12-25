<div>
  <div class="container">     
        <h2>{{ $property->name }}</h2>
        <p class="list-inline-item"> {{ $property->area_name }} {{ $property->city_name }}</p>
        <p class="list-inline-item">Developer: {{ $property->developer_name }}</p>   
        
        <div class="row">
          <div class="col-lg-9">
            <div class="post-slider rounded overflow-hidden">
              <img loading="lazy" decoding="async" src="{{ asset('storage/'.$property->cover_photo )}}" alt="Post Thumbnail">              
            </div>
          </div>
          <div class="col-lg-3">
              @if ($property->property_images > 0)
              @foreach($property->property_images as $image)
                  <img loading="lazy" decoding="async" src="{{ asset('storage/'.$image )}}" alt="Post Thumbnail">
              @endforeach            
            @else
                <img src="{{ asset('images/default-150x150.png') }}" alt="" class="img-thumbnail" width="50"  />
            @endif
            <span>{{ \Carbon\Carbon::parse($property->created_at)->format('d M, Y') }}</span>
            <hr />            
            <p><b>Amenities:</b></p>
            <div class="row">
              @if ($property->amenities > 0)
                @php
                  $amenities = App\Models\Amenity::query()->whereIn('id',$property->amenities)->get();                                  
                @endphp
                @foreach($amenities as $amenity)
                  <div class="col amenityIcon">
                    <p class="icon" style="--wiy0un: '\{{ $amenity->icon }}' "></p>
                    <p>{{ $amenity->name }}</p>
                  </div>
                @endforeach
              @endif
            </div>  
          </div>
        </div>
        <p>{!! $property->content !!}</p>
    </div>  
</div>