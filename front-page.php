<?php get_header(); ?>

  <section id="hero">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="<?php bloginfo('template_directory');?>/assets/images/hero.mp4" type="video/mp4" alt="HTML5 background video">
    </video>

    <div class="hero-nav">
      <nav class="row align-items-center">
        <div class="col-4">
          <div class="nav-circle">
            <div class="text-block-9"></div>
          </div>
          <a href="https://www.instagram.com/wcmcbd/" target="_blank" class="nav-circle w-inline-block">
            <div class="instagram"></div>
          </a>
          <a href="https://www.facebook.com/WCMCBD" target="_blank" class="nav-circle w-inline-block">
            <div class="facebook"></div>
          </a>
        </div>
        <div class="col-4 text-center">
          <a href="/">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="d-inline-block align-center img-fluid logo" alt="">
          </a>
        </div>
        <div class="col-4 text-right align-items-center">
          <a href="https://www.facebook.com/WCMCBD" target="_blank" class="nav-circle w-inline-block">
            <div class="facebook"></div>
          </a>
        </div>
      </nav>
    </div>

    <div class="center-cta-wrapper text-center">
      <a href="<?php bloginfo('template_directory'); ?>/shop"><button class="hero-cta-button">SHOP NOW</button></a>
    </div>
  </section>

  <section class="content-section container">
    <h2 class="h2-xl header-xl">About</h2>
    <div class="row">

      <div class="col-6 rmv-padding">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/blob-caps-display.png" class="hero-product img-fluid" alt="">
      </div>

      <div class="col-6 overflow-hidden">
        <div class="text-slider-wrapper">
          <div id="carousel-content" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-content" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-content" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active p-4">
               <h2 class="slider-header">THC FREE GUARENTEED</h2> 
               <p class="slider-text top-margin">
                Our CBD products are produced to strict clinical quality standards and always tested 
                for proper potency, quality and purity that you can trust.Click Here to see the latest 
                test results!
               </p>
              </div>
              <div class="carousel-item p-4">
                <h2 class="slider-header">GROWN IN THE USA</h2> 
                <p class="slider-text top-margin">
                  West Coast Medicinal's hemp is grown, extracted and sold under the strict guidelines of 
                  health Canada and AGLC. We are able to safely sell across North America and most international 
                  countries without any risk.
                </p>
              </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carousel-content" role="button" data-slide="prev">
              <i class="arrow fas fa-chevron-left"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-content" role="button" data-slide="next">
              <i class="arrow fas fa-chevron-right"></i>
              <span class="sr-only">Next</span>
            </a> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="banner-section">
    <div class="products-banner">
      <div class="banner-card">
        <div class="product-banner-img-wrapper">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/dog-treats.png" alt="">
        </div>
        <div class="product-banner-copy">
          <h2 class="banner-title">CBD For Pets</h2>
          <p class="banner-text">
            Made with natural ingredients for your puppies health
          </p>
          <div class="top-margin">
            <button class="button-white">Learn More</button>
          </div>
        </div>
      </div>
      <div class="banner-card">
        <div class="product-banner-img-wrapper">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/multi-caps.png" alt="">
        </div>
        <div class="product-banner-copy">
          <h2 class="banner-title">CBD Capsules</h2>
          <p class="banner-text">
            CBD capsules guarenteed to be fast acting & bioavailable
          </p>
          <div class="top-margin">
            <button class="button-white">Learn More</button>
          </div>
        </div>
      </div>
      <div class="banner-card">
        <div class="product-banner-img-wrapper">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/tincture-bundle.png" alt="">
        </div>
        <div class="product-banner-copy">
          <h2 class="banner-title">CBD Tinctures</h2>
          <p class="banner-text">
            Made from pure hemp CBD with full-spectrum options
          </p>
          <div class="top-margin">
            <button class="button-white">Learn More</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="card-section" class="content-section">
    <div class="vert-flex-container text-center">
      <h2 class="section-title">Our Key Values</h2>
      <p class="subtitle top-margin">With a dedicated team of hemp experts, we're here to deliver on the trust and quality you expect.</p>
      <div class="row-flex-container lg-top-margin">
        <div class="info-card">
          <div class="card-image hemp-1"></div>
          <div class="card-content">
            <h3 class="card-title">Integrity</h3>
            <p class="card-text">
              Crafted by professionals, our oils and capsules are produced to strict 
              clinical quality standards and always tested for proper potency, quality 
              and purity that you can trust.
            </p>
          </div>
        </div>
        <div class="info-card">
          <div class="card-image hemp-2"></div>
          <div class="card-content">
            <h3 class="card-title">Quality</h3>
            <p class="card-text">
              We've teamed up with big brands to give you the most up-to-date knowledge 
              and customer service we can provide. Contact us today to learn how CBD can 
              help you.
              Learn More >
            </p>
          </div>
        </div>
        <div class="info-card">
          <div class="card-image hemp-3"></div>
          <div class="card-content">
            <h3 class="card-title">Family</h3>
            <p class="card-text">
              Our customers are like family to us, that's why we only use natural
              ingredients we use at home and are here to help provide a welcoming
              and fresh environment for your medicinal needs.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="banner">

  </section>

  <section class="content-section container">

  </section>

  <section class="container content-section">

  </section>

<?php get_footer(); ?> 