<div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{$delay}}">
    <div class="pricing-card {{$ispopular ? 'popular' : ''}}">
        @if($ispopular)
        <div class="popular-badge">Most Popular</div>
        @endif
        <h3>{{$title}}</h3>
        <div class="price">
            <span class="currency">$</span>
            <span class="amount">{{$price}}</span>
            <span class="period">/ month</span>
        </div>
        <p class="description">{{$deskripsi}}</p>

        <h4>Featured Included:</h4>
        <ul class="features-list">
            @foreach($features as $feature)
                <li>
                    <i class="bi bi-check-circle-fill"></i>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>

        <a href="#" class="btn btn-{{$btn}}">
            Buy Now
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>