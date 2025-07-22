<div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{$delay}}">
    <div class="info-card">
        <div class="icon-box">
            <i class="bi bi-{{$icon}}"></i>
        </div>
        <h3>{{$title}}</h3>
        <p>{{$slot}}</p>
    </div>
</div>

<div class="col-md-6 form-group">
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-{{$icon2}}"></i></span>
            <input type="{{$type}}" name="{{$name}}" class="form-control" placeholder="{{$place}}" required="">
        </div>
</div>