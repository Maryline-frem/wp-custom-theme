<?php

// liste des posts

get_header();

// Les paramètres de la requête WP_QUery
$args = array(
    // Sélection de pages (au lieu de posts)
    'post_type' => 'page',
    // Sélection d'une page par son slug
    'pagename' => 'actus',
);
// Exécution de la requête WP_Query
$query = new WP_Query( $args );
// Affichage du résultat de la requête WP_Query sans la boucle
if ( $query->have_posts() ):
    $query->the_post();

    // Le contenu du bloc entête
    get_template_part('header', 'page');
endif;
// Restauration des paramètres originaux de la requête de l'utilisateur
wp_reset_postdata();

// La boucle normale
if ( have_posts() ):
    while (have_posts()):
        the_post();

        // Boucle
        get_template_part('loop', 'post');
    endwhile;
endif;

get_footer();