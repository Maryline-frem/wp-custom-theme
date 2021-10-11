<?php

get_header();

if ( have_posts() ):
    the_post();

    // Le contenu du bloc entête
    get_template_part('header', 'page');
endif;

get_footer();