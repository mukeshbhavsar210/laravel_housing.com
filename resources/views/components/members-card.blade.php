<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
    <div class="card bg-transparent border-0 text-center">
        <div class="card-img">
            @if ($member->image != '')
                <img loading="lazy" decoding="async" src="{{ asset('storage/'.$member->image ) }}" alt="Scarlet Pena" class="rounded w-100" width="300" height="332">    
            @endif
            
            
            @if ($member->facebook != '' || $member->instagram != '' || $member->linkedin != '')
                <ul class="card-social list-inline">
                    @if ($member->facebook != '')
                        <li class="list-inline-item"><a class="facebook" target="_blank" href="https://{{ $member->facebook }}"><i class="fab fa-facebook"></i></a></li>
                    @endif

                    @if ($member->instagram != '')
                        <li class="list-inline-item"><a class="twitter" target="_blank" href="https://{{ $member->instagram }}"><i class="fab fa-twitter"></i></a></li>
                    @endif

                    @if ($member->linkedin != '')
                        <li class="list-inline-item"><a class="instagram" target="_blank" href="https://{{ $member->linkedin }}"><i class="fab fa-instagram"></i></a></li>
                    @endif
                </ul>
            @endif
        </div>
        <div class="card-body">
            <h3>{{ $member->name }}</h3>
            <p>{{ $member->designation }}</p>
        </div>
    </div>
</div>