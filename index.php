<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IAP
 */

get_header();
?>
<?php 
    if ( have_posts() ) :


        /* Start the Loop */
        while ( have_posts() ) : the_post();

            the_title();
            
        endwhile;

    else :
        echo 'nu avem continut sa afisam';

    endif;
?>
<?php
get_footer();