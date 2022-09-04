<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 content-container">
                <header class="text-center">
                    <?php the_title('<h3 class="title-page">', '</h3>'); ?>
                </header>

                <div class="content">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
                            'after' => '</nav>',
                            /* translators: %: Page number. */
                            'pagelink' => esc_html__('Page %', 'twentytwentyone'),
                        )
                    );
                    ?>
                </div><!-- .entry-content -->
                <?php example_cats_related_post() ?>

            </div>
            <div class="col-lg-3 col-12 sidebar-post">
                <?php echo get_template_part('template-parts/sidebar/sidebar-schools-majors'); ?>
                <?php echo get_template_part('template-parts/sidebar/sidebar-post-popular'); ?>
            </div>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
