<?php get_header(); ?>

    <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); // display id of the post ?>" <?php post_class(); // display css automatic post classes ?>>

      <?php
      /* Image Url */
        $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
      ?>

      <main class="grid grid--center">
        <div class="col-100">

          <?php the_content(); ?>
        
        </div>
      </main>

    </article>

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
