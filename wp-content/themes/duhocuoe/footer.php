<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */

//get Menu sidemap


?>
</div><!-- #content -->
<?php global $hideFooter;
if (!$hideFooter) { ?>
    <section class="footer-form" id="footer-form"
             style="background-image: url('/wp-content/themes/duhocuoe/images/background-section-1.png')">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <h3 class="section-title">ĐĂNG KÝ TƯ VẤN</h3>
                    <form action="/" name="advise-form" id="advise_form" class="advise-form">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="name" name="name" placeholder="Họ và tên">
                            </div>
                            <div class="col-6">
                                <input type="text" class="phone" name="phone" placeholder="Số điện thoại">
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="text" class="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="text" class="science-care" name="science_care"
                                       placeholder="Khóa học quan tâm">
                            </div>
                            <div class="col-12">
                                <textarea id="message" name="message" rows="4" placeholder="Nội dung"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn btn-submit submit" name="send-message" value="Gửi">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-12 d-flex align-items-center justify-content-center">
                    <div class="sitemap" id="sitemap">
                        <h3>Liên kết trang</h3>
                        <?php echo wp_nav_menu($args = array(
                            'menu_class' => 'sitemap-list',
                            'theme_location' => 'primary-navigation-1',
                            'depth' => "1", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                        )); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="main-footer" id="main_footer">
        <div class="container">
            <p class="text-center">Copyright © 2020 CÔNG TY LIÊN HIỆP GIÁO
                DỤC ĐẠI DƯƠNG - UOE. </br>Design and powered by <a
                        href="https://tigergentlemen.com">TigerGentlemen</a></p>
        </div>
    </footer>

<?php } ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
