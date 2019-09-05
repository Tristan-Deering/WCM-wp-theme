<?php get_header(); ?>

<!-- Page Content -->
<div class="content-section container">
    <h1 class="my-4">Blog</h1>
    
    
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

    <!-- Blog Post -->
    <div class="card mb-4">
      <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php 
            the_title(); ?>" class="card-img-top">
      <?php endif; ?>
      
      <div class="card-body">
        <a href="<?php the_permalink(); ?>">
          <h2 class="card-title"><?php the_title(); ?></h2>
        </a>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2017 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>

    <?php endwhile; else: endif; ?>   

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>