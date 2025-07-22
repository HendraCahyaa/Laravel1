<div class="swiper-slide">
        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>
                <i class="bi bi-quote quote-icon"></i>
                {{$slot}}
                </p>
            </div>
            <div class="testimonial-profile">
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="profile-info">
                    <img src="{{$img}}" alt="Profile Image">
                    <div>
                        <h3>{{$name}}</h3>
                        <h4>{{$pekerjaan}}</h4>
                    </div>
                </div>
        </div>
    </div>
</div>