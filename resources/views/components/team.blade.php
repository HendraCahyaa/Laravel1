<div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="{{$delay}}">
    <div class="team-card">
        <div class="team-image">
            <img src="{{$img}}" class="img-fluid" alt="">
            <div class="team-overlay">
                <p>{{$slot}}</p>
                <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="team-content">
            <h4>{{$name}}</h4>
            <span class="position">{{$span}}</span>
        </div>
    </div>
</div>