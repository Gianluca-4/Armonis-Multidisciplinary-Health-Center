<?php get_header(); ?>

  <div class="cover cover--archive text-white mb-3">
        
    <div class="cover__bg cover__bg--archive"></div>

    <div class="cover__content text-center">
      <h1 class="text-4 text-font text-reveal">CENTRO POLIFUNZIONALE ARMONIS A MARSALA</h1>
      <h2 class="text-2 text-reveal mb-0">TUTTI I NOSTRI PROFESSIONISTI</h2>
    </div>

  </div>
 
  <main class="grid grid--full archive-grid">

  <?php if (have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

    
      <article class="col-40 archive-columns fade-up">

        <a href="<?php the_permalink(); ?>" class="text-dark">

          <?php the_post_thumbnail('image-big', array('class' => 'img-res','alt' => get_the_title())); ?>

          <h3 class="text-center mb-0"><?php the_title(); ?></h3>

        </a>

      </article>
    

  <?php endwhile; ?>
  <?php endif; ?>

  </main>

<?php get_footer(); ?>
