<?php

/*  Enqueue javascript - Messa in coda degli script Javascript nel footer tramite wp_footer()
/* ------------------------------------------------------------------------------------------- */

function nextframe_scripts() {

    wp_enqueue_script( 'nextframe-bundle', get_template_directory_uri().'/custom/bundle.min.js','','', true );

    // nome per identificare script aggiunto (a scelta) + funzione completa l'URL + concatenazione con "." + stringa per arrivare al file JS + True aggiunge script alla fine in wp_footer()
    wp_enqueue_script( 'nextframe-scripts', get_template_directory_uri().'/custom/custom-scripts.js','','', true );
    
    // abilita il threading (commenti annidati) nel frontend: sei su una pagina singola ( is_singular() ) e l’opzione dei commenti annidati è attiva (comment-reply).
    //if ( is_singular() && get_option( 'thread_comments' ) )  { wp_enqueue_script( 'comment-reply' ); }

}

//hook (gancio)
add_action( 'wp_enqueue_scripts', 'nextframe_scripts' );    // 1 nome hook, 2 funzione che mette in coda lo script


/*  Enqueue CSS - Messa in coda del file custom di stile nella head tramite wp_head()
/* ------------------------------------------------------------------------------------------- */

function nextframe_custom_styles() {

	wp_enqueue_style( 'nextframe-custom-styles', get_template_directory_uri().'/custom/custom-style.css');
    wp_enqueue_style( 'nextframe-custom-font', 'https://fonts.googleapis.com/css2?family=EBGaramond:wght@700;800&display=swap');
    wp_enqueue_style( 'nextframe-custom-font', 'https://fonts.googleapis.com/css2?family=Barlow:wght@400;700;800&display=swap');

}

add_action( 'wp_enqueue_scripts', 'nextframe_custom_styles' );









?>


