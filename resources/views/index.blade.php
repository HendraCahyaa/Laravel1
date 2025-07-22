@extends('layouts.app')
@section('title', 'Page Title')
@section('content')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="badge-wrapper mb-3">
              <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                <div class="icon-circle me-2">
                  <i class="bi bi-bell"></i>
                </div>
                <span class="badge-text me-3">Innovative Solutions</span>
              </div>
            </div>

            <h1 class="hero-title mb-4">Accelerating business growth through innovative technology</h1>

            <p class="hero-description mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius tortor nibh, sit amet tempor nibh finibus et. Aenean eu enim justo.</p>

            <div class="cta-wrapper">
              <a href="#" class="btn btn-primary">Discover More</a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image">
              <img src="/invent/assets/img/illustration/illustration-16.webp" alt="Business Growth" class="img-fluid" loading="lazy">
            </div>
          </div>
        </div>

     <div class="row feature-boxes">
      <x-feature title="pertama" icon="gear">
        <b>Ini adalah konten</b> untuk bagian pertama yang akan dianimasikan dengan AOS
    </x-feature>
      <x-feature title="kedua" icon="airplane">
        <b>Ini adalah konten</b> untuk bagian kedua yang akan dianimasikan dengan AOS
    </x-feature>
      <x-feature title="ketiga" icon="airplane">
        <b>Ini adalah konten</b> untuk bagian ketiga yang akan dianimasikan dengan AOS
    </x-feature>

     </div>
      

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Who We Are</p>
            <h3>Unleashing Potential with Creative Strategy</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="/invent/assets/img/about/about-portrait-1.webp" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="/invent/assets/img/about/about-8.webp" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="/invent/assets/img/about/about-12.webp" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- How We Work Section -->
    <section id="how-we-work" class="how-we-work section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>How We Work</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="steps-5">
          <div class="process-container">

            <div class="process-item">
            <x-processitem title="Project Planning" icon="pencil-square" step="01">
              <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim</p>
          </x-processitem>
            </div>
  
          <div class="process-item">
            <x-processitem title="Development Phase" icon="gear" step="02">
              <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus.</p>
          </x-processitem>
          </div>
          <div class="process-item">
            <x-processitem title="Testing &amp; QA" icon="search" step="03">
              <p>Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero</p>
          </x-processitem>
          </div>
          <div class="process-item">
            <x-processitem title="Launch &amp; Support" icon="rocket-takeoff" step="04">
              <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt.</p>
          </x-processitem>
          </div>

          </div>
        </div>

      </div>

    </section><!-- /How We Work Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-5">

        <div class="col-md-5 justify-content-center g-5 ">
        <x-serviceitem icon="code-slash" title="Custom Web Development" step="Learn More" icon2="arrow-right">
        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </x-serviceitem>
        </div>
        <div class="col-md-5 justify-content-center g-5">
        <x-serviceitem icon="phone-fill" title="Mobile App Solution" step="Learn More" icon2="arrow-right">
        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </x-serviceitem>
        </div>
        <div class="col-md-5 justify-content-center g-5">
        <x-serviceitem icon="palette2" title="UI/UX Design" step="Learn More" icon2="arrow-right">
        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </x-serviceitem>
        </div>
        <div class="col-md-5 justify-content-center g-5">
        <x-serviceitem icon="bar-chart-line" title="Digital Marketing" step="Learn More" icon2="arrow-right">
        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </x-serviceitem>
        </div>
        <div class="col-md-5 justify-content-center g-5">
        <x-serviceitem icon="cloud-check" title="Cloud Computing" step="Learn More" icon2="arrow-right">
        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </x-serviceitem>
        </div>
        <div class="col-md-5 justify-content-center g-5">
        <x-serviceitem icon="shield-lock" title="Cybersecurity Solutions" step="Learn More" icon2="arrow-right">
        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </x-serviceitem>
        </div>

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Services Alt Section -->
    <section id="services-alt" class="services-alt section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="content-block">
              <h6 class="subtitle">Our innovative services</h6>
              <h2 class="title">Our customers excel in technology management</h2>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt diam et gravida consequat. Sed nec mauris quis lacus commodo lobortis. Suspendisse euismod commodo sem, in finibus purus bibendum et. Morbi eu neque sed velit convallis vestibulum a vel odio.
              </p>
              <div class="button-wrapper">
                <a class="btn" href="services.html"><span>Explore All Services</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-list">
              <x-servicelist title="Software Engineering" icon="code-square">
              <p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
              </x-servicelist>
              <x-servicelist title="Business Analytics" icon="graph-up">
              <p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
              </x-servicelist>
              <x-servicelist title="Mobile Solutions" icon="phone">
              <p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
              </x-servicelist>
              <x-servicelist title="Tech Infrastructure" icon="gear">
              <p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
              </x-servicelist>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Alt Section -->

    <!-- Call To Action 2 Section -->
    <section id="call-to-action-2" class="call-to-action-2 section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="cta-image-wrapper">
              <img src="/invent/assets/img/cta/cta-4.webp" alt="Call to Action" class="img-fluid rounded-4">
              <div class="cta-pattern"></div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="cta-content">
              <h2>Transform Your Vision Into Reality Today</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>

              <div class="cta-features">
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="400">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Lorem ipsum dolor sit amet consectetur</span>
                </div>
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="450">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Praesent eget risus vitae massa</span>
                </div>
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="500">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Aenean pretium nisi vel pulvinar</span>
                </div>
              </div>

              <div class="cta-action mt-5">
                <a href="#" class="btn btn-primary btn-lg me-3">Get Started</a>
                <a href="#" class="btn btn-outline-primary btn-lg">Learn More</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action 2 Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active">All Work</li>
              <li data-filter=".filter-web">Web Design</li>
              <li data-filter=".filter-graphics">Graphics</li>
              <li data-filter=".filter-motion">Motion</li>
              <li data-filter=".filter-brand">Branding</li>
            </ul>
          </div>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

          <x-portfolio img="/invent/assets/img/portfolio/portfolio-1.webp" href="/invent/assets/img/portfolio/portfolio-1.webp" filter="web" data="web" step="Web Design" title="Modern Dashboard Interface">
            <p>Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis.</p>
          </x-portfolio>
          <x-portfolio img="/invent/assets/img/portfolio/portfolio-10.webp" href="/invent/assets/img/portfolio/portfolio-10.webp" filter="graphics" data="graphics" step="Graphics" title="Creative Brand Identity">
            <p>Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis.</p>
          </x-portfolio>
          <x-portfolio img="/invent/assets/img/portfolio/portfolio-7.webp" href="/invent/assets/img/portfolio/portfolio-7.webp" filter="motion" data="motion" step="Motion" title="Product Animation Reel">
            <p>Donec ullamcorper nulla non metus auctor fringilla dapibus.</p>
          </x-portfolio>
          <x-portfolio img="/invent/assets/img/portfolio/portfolio-4.webp" href="/invent/assets/img/portfolio/portfolio-4.webp" filter="brand" data="brand" step="Branding" title="Luxury Brand Package">
            <p><p>Aenean lacinia bibendum nulla sed consectetur elit.</p></p>
          </x-portfolio>
          <x-portfolio img="/invent/assets/img/portfolio/portfolio-2.webp" href="/invent/assets/img/portfolio/portfolio-2.webp" filter="web" data="web" step="Web Design" title="E-commerce Platform">
            <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          </x-portfolio>
          <x-portfolio img="/invent/assets/img/portfolio/portfolio-11.webp" href="/invent/assets/img/portfolio/portfolio-11.webp" filter="graphics" data="graphics" step="Graphics" title="Digital Art Collection">
            <p>Cras mattis consectetur purus sit amet fermentum.</p>
          </x-portfolio>
          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center">

          <!-- Basic Plan -->
          <x-pricing title="Basic Plan" price="9.9" btn="primary" :delay="100" :ispopular="false"
          deskripsi="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam."
          :features="['Duis aute irure dolor','Excepteur sint occaecat','Nemo enim ipsam voluptatem']">
          </x-pricing>

          <!-- Standard Plan -->
          <x-pricing title="Standar Plan" price="19.9" btn="light" :delay="200" :ispopular="true"
          deskripsi="At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum."
          :features="['Duis aute irure dolor','Excepteur sint occaecat','Nemo enim ipsam voluptatem','ut labore et dolar magna']">
          </x-pricing>

          <!-- Premium Plan -->
          <x-pricing title="Premium Plan" price="39.9" btn="primary" :delay="300" :ispopular="false"
          deskripsi="Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae."
          :features="['Duis aute irure dolor','Excepteur sint occaecat','Nemo enim ipsam voluptatem','Temporibus autem quibusdam','Saepe eveniet ut et voluptates']">
          </x-pricing>

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="faq-contact-card">
              <div class="card-icon">
                <i class="bi bi-question-circle"></i>
              </div>
              <div class="card-content">
                <h3>Still Have Questions?</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum.</p>
                <div class="contact-options">
                  <a href="#" class="contact-option">
                    <i class="bi bi-envelope"></i>
                    <span>Email Support</span>
                  </a>
                  <a href="#" class="contact-option">
                    <i class="bi bi-chat-dots"></i>
                    <span>Live Chat</span>
                  </a>
                  <a href="#" class="contact-option">
                    <i class="bi bi-telephone"></i>
                    <span>Call Us</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-accordion">
              <div class="faq-item faq-active">
                <div class="faq-header">
                  <h3>Vivamus suscipit tortor eget felis porttitor volutpat?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="faq-header">
                  <h3>Curabitur aliquet quam id dui posuere blandit?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item">
                <div class="faq-header">
                  <h3>Sed porttitor lectus nibh ullamcorper sit amet?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item">
                <div class="faq-header">
                  <h3>Nulla quis lorem ut libero malesuada feugiat?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel.
                  </p>
                </div>
              </div><!-- End FAQ Item-->
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <x-team name="Daniel Mitchell" :delay="100" img="/invent/assets/img/person/person-m-1.webp" span="Creative Director">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
          </x-team><!-- End Team Member -->
          <x-team name="Rebecca Taylor" :delay="200" img="/invent/assets/img/person/person-f-6.webp" span="Lead Developer">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
          </x-team><!-- End Team Member -->
          <x-team name="Marcus Johnson" :delay="300" img="/invent/assets/img/person/person-m-6.webp" span="UI/UX Design">
            <p>Cras ornare tristique elit. Integer in dui quis est placerat ornare. Phasellus a lacus a risus.</p>
          </x-team><!-- End Team Member -->
          <x-team name="Jessica Parker" :delay="400" img="/invent/assets/img/person/person-f-3.webp" span="Marketing Strategist">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          </x-team><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
          <x-testimoni name="Robert Johnson" pekerjaan="Marketing Director" img="/invent/assets/img/person/person-m-8.webp">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Sed do eiusmod tempor incididunt.
          </x-testimoni><!-- End testimonial item -->
          <x-testimoni name="Lisa williams" pekerjaan="Product Manager" img="/invent/assets/img/person/person-f-3.webp">
            LProin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et maecenas aliquam.
          </x-testimoni><!-- End testimonial item -->
          <x-testimoni name="Emma Parker" pekerjaan="UX Designer" img="/invent/assets/img/person/person-f-10.webp">
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram.
          </x-testimoni><!-- End testimonial item -->
          <x-testimoni name="David Miller" pekerjaan="Senior Developer" img="/invent/assets/img/person/person-m-5.webp">
            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit.
          </x-testimoni><!-- End testimonial item -->
          <x-testimoni name="Michael Davis" pekerjaan="CEO &amp; Founder" img="/invent/assets/img/person/person-m-2.webp">
            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat.
          </x-testimoni><!-- End testimonial item -->
          <x-testimoni name="Sarah Thompson" pekerjaan="Art Director" img="/invent/assets/img/person/person-f-7.webp">
            Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur.
          </x-testimoni><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mb-5">
            <x-contact title="Our Address" icon="geo-alt" :delay="100">
              <p>2847 Rainbow Road, Springfield, IL 62701, USA</p>
            </x-contact>
            <x-contact title="Contact Number" icon="telephone" :delay="200">
              <p>Mobile: +1 (555) 123-4567<br>
                Email: info@example.com</p>
            </x-contact>
            <x-contact title="Opening Hour" icon="clock" :delay="300">
              <p>Monday - Saturday: 9:00 - 18:00<br>
                Sunday: Closed</p>
            </x-contact>
          </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Email address*" required="">
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-list"></i></span>
                      <select name="subject" class="form-control" required="">
                        <option value="">Select service*</option>
                        <option value="Service 1">Consulting</option>
                        <option value="Service 2">Development</option>
                        <option value="Service 3">Marketing</option>
                        <option value="Service 4">Support</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                      <textarea class="form-control" name="message" rows="6" placeholder="Write a message*" required=""></textarea>
                    </div>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center">
                    <button type="submit">Submit Message</button>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- /Contact Section -->

  </main>

@endsection
