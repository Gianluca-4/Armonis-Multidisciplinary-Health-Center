<?php /*
  
  Template Name: Home Template

*/ ?>

<?php get_header(); ?>


    <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

      <?php
      /* Image Url */
        $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
      ?>

      <div class="cover text-white">
        
        <div class="cover__bg" style="background: url(<?php echo $image_attributes[0]; ?>) no-repeat center center; background-size: cover;"></div>
    
        <div class="cover__content">
          <h1 class="text-4 text-font text-reveal">CENTRO POLIFUNZIONALE ARMONIS A MARSALA</h1>
          <h2 class="text-1 text-reveal">Ritrova l'Armonia che meriti <br>con un percorso completo e personalizzato</h2>
          <p class="text-reveal">Nel centro Armonis ogni persona viene accompagnata da professionisti specializzati
            <br>che collaborano per offrire un approccio integrato alla salute.
            <br>Ogni percorso è pensato per ristabilire equilibrio tra corpo e mente.
          </p>
          <a href="/contatti" class="button text-reveal">PRENOTA UNA VISITA</a>
        </div>

      </div>
  
      <main class="grid">
        <div class="col-100 p-0">
          
          <?php the_content();?>

        </div>
      </main>

    <?php endwhile; ?><?php endif; ?>


<?php get_footer(); ?>
