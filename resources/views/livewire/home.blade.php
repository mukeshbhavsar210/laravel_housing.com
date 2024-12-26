<div>
    <nav class="navbar navbar-expand-xl" id="navbar">
        <a href="index.php" class="text-decoration-none mobile-logo">
            <span class="h2 text-uppercase text-primary bg-dark">Online</span>
            <span class="h2 text-uppercase text-white px-2">SHOP</span>
        </a>
        <button class="navbar-toggler menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <!-- <span class="navbar-toggler-icon icon-menu"></span> -->
              <i class="navbar-toggler-icon fas fa-bars"></i>
        </button>
      
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">     
            @if ($cities->isNotEmpty())
                @foreach ($cities as $city)
                <li class="nav-item dropdown">
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $city->name}}                    
                    </button>

                    @if ($city->sub_category->isNotEmpty())
                          <ul >
                              @foreach ($city->sub_category as $areaName)
                                  <li><a class="dropdown-item nav-link" href="{{ route('front.shop',[$city->slug,$areaName->slug])}}">{{ $areaName->name }}</a></li>
                              @endforeach
                          </ul>
                      @endif
                </li>
                @endforeach
            @endif
        </ul>
    </div>
</nav>
    <section class="section-4 pt-5">
        <div class="container">
            <div class="row pb-3">
                @if ($properties->isNotEmpty())
                    @foreach ($properties as $value)
                        <div class="col-md-3">
                            <div class="card product-card">
                                <div class="product-image position-relative">
                                    
                                </div>
                                <div class="card-body text-center mt-3">
                                    <a href="{{ route('front.product',$value->slug) }}" class="product-img">
                                    {{ $value->name }}
                                </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</div>