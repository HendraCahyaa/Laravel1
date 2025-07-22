<div>
    <div class="process-item" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
            <span class="step-number">{{$step}}</span>
                <div class="card-body">
                <div class="step-icon">
                    <i class="bi bi-{{$icon}}"></i>
                </div>
                <div class="step-content">
                    <h3>{{$title}}</h3>
                    <p>{{$slot}}</p>
                </div>
                </div>
        </div>
    </div>
</div>