<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if (have_posts()) : ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 left-col">
                <!--                <header class="text-left">-->
                <!--                    --><?php //the_archive_title('<h3 class="title-page">', '</h3>'); ?>
                <!--                    --><?php //if ($description) : ?>
                <!--                        <div class="archive-description">-->
                <?php //echo wp_kses_post(wpautop($description)); ?><!--</div>-->
                <!--                    --><?php //endif; ?>
                <!--                </header>-->


                <section class="article-list">
                    <div class="container">
                        <div class="intro">
                            <?php the_archive_title('<h3 class="text-center title-page">', '</h3>'); ?>
                            <?php if ($description) : ?>
                                <p class="text-center archive-description"><?php echo wp_kses_post(wpautop($description)); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="row articles archive">
                            <?php while (have_posts()) : ?>
                                <?php the_post(); ?>

                                <div class="col-sm-6 col-md-4 col-xxl-4 offset-xxl-0 item">
                                    <a href="<?= get_permalink(get_the_ID()) ?>">
                                        <img class="img-fluid crop-image-200"
                                             src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>"
                                             onerror="if (this.src != 'error.jpg') this.src = '/wp-content/themes/duhocuoe/images/Flag_of_None.png';"/>
                                    </a>
                                    <h3 class="name text-overflow-3-line"><?= get_the_title() ?></h3>
                                    <p class="description text-overflow-4-line archive-description"><?= get_the_excerpt() ?></p>
                                    <a class="btn btn-read-more bg-blue btn-center" type="button"
                                       href="<?= get_permalink(get_the_ID()) ?>"
                                       style="padding-right: 30px;padding-left: 30px;margin-top: 20px;">Xem thêm
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <!--                        --><?php //twenty_twenty_one_the_posts_navigation(); ?>
                    </div>
                </section>

            </div>
            <div class="col-lg-3 col-12 sidebar-post">
                <?php echo get_template_part('template-parts/sidebar/sidebar-post-popular'); ?>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php get_footer(); ?>


