<div>
<div class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="mb-5">
            <h2 class="mb-4" style="line-height:1.5">{{ $property->name }}</h2>
            <span>{{ \Carbon\Carbon::parse($property->created_at)->format('d M, Y') }}<span class="mx-2">/</span> </span>
            <p class="list-inline-item"> {{ $property->area_name }} {{ $property->city_name }}</p>
            <p class="list-inline-item">Developer: {{ $property->developer_name }}</p>   
            
          </div>
          <div class="mb-5 text-center">
            <div class="post-slider rounded overflow-hidden">
              <img loading="lazy" decoding="async" src="{{ asset('storage/'.$property->cover_photo )}}" alt="Post Thumbnail">              
            </div>
          </div>
          <div class="content">
            <div class="row">
              @if ($property->property_images > 0)
                @foreach($property->property_images as $image)
                  <div class="col-md-2">
                    <img loading="lazy" decoding="async" src="{{ asset('storage/'.$image )}}" alt="Post Thumbnail">
                  </div>
                @endforeach            
              @else
                  <img src="{{ asset('images/default-150x150.png') }}" alt="" class="img-thumbnail" width="50"  />
              @endif
            </div>
            <p>{!! $property->content !!}</p>
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
      </div>
    </div>
  </div>    
</div>