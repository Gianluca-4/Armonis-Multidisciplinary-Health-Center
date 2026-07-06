
<footer class="footer mt-1 text-white">
  <div class="grid pt-3 pb-3">

    <div class="col-33 text-center p-2">
      <h3 class="mb-2">
        <a href="<?php echo esc_url(home_url()); ?>" class="header__logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/logo-white.svg" alt="<?php bloginfo('title'); ?>">
        </a>
      </h3>
      <p class="mb-2">Sede legale: Via Rossi, 70</p>
      <p class="mb-2">Sede operativa: Via Bianchi, 89</p>
      <p class="mb-2">Marsala (TP) 91025</p>
    </div>

    <div class="col-33 text-center p-2">
      <h3 class="mb-2">Aree di Competenza</h3>
      <p class="mb-2"><a href="/fisioterapista">Fisioterapia</a></p>
      <p class="mb-2"><a href="/nutrizionista">Nutrizione</a></p>
      <p class="mb-2"><a href="/osteopata">Osteopatia</a></p>
      <p class="mb-2"><a href="/psicologa">Psicologia</a></p>
    </div>

    <div class="col-33 text-center p-2">
      <h3 class="mb-2">
        <a class="title-font" href="/contatti">Contattaci</a>
      </h3>
      <p class="mb-2">+39 0923 3333333</p>
      <p class="mb-2">+39 339 333 3333</p>
      <p class="mb-2">segreteria@armonis.it</p>
    </div>
    
    <div class="col-50 p-2">
      © Copyright <?php echo date("Y"); //display current year ?>
      <?php bloginfo('title'); // display wp blog title ?>
    </div>

    <div class="col-50 text-right p-1">
      <a href="/privacy-policy"> Privacy Policy</a> - <a href="/cookie-policy"> Cookie Policy</a>
    </div>

    <div class="col-100 p-0">
      <p class="text-center pt-2">Designed & Developed by Gianluca Casano</p>
    </div>

  </div>
</footer>

<?php wp_footer(); // insert scripts by WordPress at end of the page ?>

</div>

</body>
</html>
