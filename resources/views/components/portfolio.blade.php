<div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-{{$filter}}">
    <div class="portfolio-card">
        <div class="portfolio-image">
            <img src="{{$img}}" class="img-fluid" alt="" loading="lazy">
            <div class="portfolio-overlay">
                <div class="portfolio-actions">
                    <a href="{{$href}}" class="glightbox preview-link" data-gallery="{{$data}}"><i class="bi bi-eye"></i></a>
                    <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
            <div class="portfolio-content">
            <span class="category">{{$step}}</span>
            <h3>{{$title}}</h3>
            <p>{{$slot}}</p>
            </div>
    </div>
</div>