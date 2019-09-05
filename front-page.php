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
    <div class="row">

      <div class="col-6">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/blob-caps-display.png" class="img-fluid" alt="">
      </div>

      <div class="col-6">
        <h2 class="h2-xl header-xl">About</h2>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="tabs nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item">
            <a class="tabs nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item">
            <a class="tabs nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
          </li>
          <li class="nav-item">
            <a class="tabs nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">..s.</div>
          <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">..d.</div>
          <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">..f.</div>
        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?> 