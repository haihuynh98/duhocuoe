<?php
// the query
$paged = (get_query_var('page')) ? get_query_var('page') : 1;
$postPPage = 25;
if (isset($_GET['pndisplay'])) {
    switch ($_GET['pndisplay']) {
        case 'test':
            {
                $postPPage = 3;
            }
            break;
        case 'medium':
            {
                $postPPage = 40;
            }
            break;
        case 'large':
            {
                $postPPage = 50;
            }
            break;
        default:
            {
                $postPPage = 25;
            }
            break;
    }
}

$product_query = new WP_Query([
    'post_type' => 'production',
    'post_status' => 'publish',
    'tax_query' => [
        isset($_GET['pcat']) ? [
            'taxonomy' => 'product-type',
            'field' => 'slug',
            'terms' => isset($_GET['pcat']) ? $_GET['pcat'] : '',
        ] : null,
    ],
    'posts_per_page' => $postPPage,
    'paged' => $paged,
]);

if (isset($_GET['pcat'])) {
    $catObj = product_tiger_get_category_by_slug($_GET['pcat']);
    $catName = $catObj->name;
}


get_header();
?>


    <section class="breadcrumb-area"
             style="background-image: url('<?php echo get_template_directory_uri() . '/images/breadcum.jpg' ?>')">
        <div class="container">
            <div class="title-page breadcrumb-page">
                <h2 class="title">Sản phẩm</h2>
            </div>
        </div>
    </section>

    <div class="body-content" id="body_content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="sidebar">

                        <ul class="category-menu">
                            <li class="title-menu"><h3>Danh mục</h3></li>
                            <li class="item-menu <?php echo !isset($_GET['pcat']) ? 'category-current' : '' ?>">
                                <a href="/production"><h4>Tất cả sản phẩm</h4></a>
                            </li>
                            <?php
                            $args = array(
                                'hide_empty' => 0,
                                'taxonomy' => 'product-type',
                            );
                            $cates = get_categories($args);
                            foreach ($cates as $cat):
                                $slugCat = updateParamUrl('pcat', $cat->slug, ['page']);
                                $nameCat = $cat->name;
                                $isCurrent = false;
                                if (isset($_GET['pcat']) && $_GET['pcat'] == $cat->slug) {
                                    $isCurrent = true;
                                }
                                ?>
                                <li class="item-menu <?php echo $isCurrent ? 'category-current' : '' ?>">
                                    <a href="<?php echo $slugCat ?>"><h4><?php echo $nameCat ?></h4></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-12 content-store">
                    <div class="header-store">
                        <h2 class="title"><?php echo isset($_GET['pcat']) ? $catName : 'Tất cả sản phẩm' ?></h2>
                    </div>
                    <div class="body-store">
                        <div class="row">
                            <?php
                            // Start the Loop.
                            while ($product_query->have_posts()) :
                                $product_query->the_post(); ?>
                                <div class="col-md-4 col-6">
                                    <?php echo get_template_part('template-parts/product/box-product'); ?>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>

                        </div>
                    </div>
                    <div class="footer-store row">
                        <div class="col-md-6 col-12 product-per-page">
                            <?php paginate_product($product_query); ?>
                            <?php //echo paginate_links([
                            //                                'total'        => $product_query->max_num_pages,
                            //                                'prev_text' => '<i class="fas fa-angle-left"></i>',
                            //                                'next_text' => '<i class="fas fa-angle-right"></i>',
                            //                                'type' => 'list',
                            //                                'before_page_number' => '<p>',
                            //                                'after_page_number' => '</p>',
                            //                            ]);
                            ?>
                        </div>
                        <form action="" method="get" name="product-per-page" class="col-md-6 col-12 product-per-page">
                            <?php getParamsInput('pndisplay'); ?>
                            <span>Hiển thị</span>
                            <select id="product_per_display" name="pndisplay">
                                <option value="small" <?php echo $postPPage == 25 ? 'selected' : '' ?>>25</option>
                                <option value="medium" <?php echo $postPPage == 40 ? 'selected' : '' ?>>40</option>
                                <option value="large" <?php echo $postPPage == 50 ? 'selected' : '' ?>>50</option>
                            </select>
                            <span> sản phẩm</span>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <section class="u-align-center u-clearfix u-image u-section-2" id="carousel_092d" data-image-width="810"
             data-image-height="1080"
             style="background-image: url(&quot;/wp-content/uploads/2022/06/pexels-photo-6873095.jpeg&quot;);">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
            <div class="u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">Liên hệ chúng tôi</h2>
                    <div class="u-form u-form-1">
                        <form action="#" method="POST" class="u-clearfix u-form-spacing-13 u-form-vertical u-inner-form"
                              style="padding: 0;" source="email" name="form">
                            <div class="u-form-group u-form-name">
                                <label for="name-f18c" class="u-label u-label-1">Tên</label>
                                <input type="text" placeholder="Tên của bạn" id="name-f18c" name="name"
                                       class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
                            </div>
                            <div class="u-form-group u-form-phone u-form-group-2">
                                <label for="phone-cbff" class="u-label u-label-2" wfd-invisible="true">Điện
                                    thoại</label>
                                <input type="tel"
                                       pattern="+?d{0,2}[s(-]?([0-9]{3})[s)-]?([s-]?)([0-9]{3})[s-]?([0-9]{2})[s-]?([0-9]{2})"
                                       placeholder="Nhập số điện thoại (vd: 0155552675)" id="phone-cbff"
                                       name="phone оо" class="u-grey-5 u-input u-input-rectangle u-input-2" required="">
                            </div>
                            <div class="u-form-group u-form-message u-form-group-3">
                                <label for="message-1015" class="u-label u-label-3"> Lời nhắn</label>
                                <textarea placeholder="Bạn có thắc mắc, hãy để lại lời nhắn tại đây!" rows="4" cols="50"
                                          id="message-1015" name="message-1"
                                          class="u-grey-5 u-input u-input-rectangle u-input-3" required=""></textarea>
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <a href="#"
                                   class="u-border-none u-btn u-btn-submit u-button-style u-palette-3-base u-btn-1">gửi
                                    tin nhắn<br>
                                </a>
                                <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                            </div>
                            <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your
                                message has been sent.
                            </div>
                            <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your
                                message. Please fix errors then try again.
                            </div>
                            <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
