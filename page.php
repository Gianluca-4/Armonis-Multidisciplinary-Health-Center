<?php get_header(); // insert header.php inclusion  ?>

<div class="sma-spacer"></div>

<main class="grid grid--center">
  <div class="col-80">

    <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); // start of the loop ?>

      <!-- loop content -->

      <article class="article">

        <?php the_content(); ?>

      </article>

    <?php endwhile; ?>
    <?php endif; ?>

  </div>

</main>

<?php get_footer(); // insert footer.php inclusion  ?>
