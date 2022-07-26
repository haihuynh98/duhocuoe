<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while (have_posts()) :
    the_post();

    $postID = get_the_ID();
    get_template_part('template-parts/content/content', 'single');

    if (function_exists('tg_set_post_view')) {
        tg_set_post_view($postID);
    }
endwhile; // End of the loop.
/* Restore original Post Data */
wp_reset_postdata();

get_footer();
