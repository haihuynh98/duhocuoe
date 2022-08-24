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
    <section class="address-footer" id="address_footer">
        <div class="container">
            <div class="row">
                <div class="col-6 address-col">
                    <h3>Trụ sở chính TP. Hồ Chí Minh</h3>
                    <p>15C đường Cao Thắng, phường 2, quận 3, TPHCM</p>
                    <p>Tel: <a href="tel:02838327986">(028) 38.32.79.86</a></p>
                    <p>Hotline: <a href="tel:0911470606">0911 47 0606</a></p>
                    <p>Email: <a href="mailto:duhocuoe@gmail.com">duhocuoe@gmail.com</a></p>
                    <p class="hide-mobile">Zalo: <a href="https://chat.zalo.me/?phone=0934155606" target="_blank">0934155606</a></p>
                    <p class="hide-pc">Zalo: <a href="https://zalo.me/0934155606" target="_blank">0934155606</a></p>
                </div>
                <div class="col-6 address-col">
                    <h3>Văn phòng TP. Hồ Chí Minh</h3>
                    <p>Tòa nhà La Bonita, 215 Nguyễn Gia Trí, phường 25, quận Bình Thạnh, TPHCM</p>
                    <p>Hotline: <a href="tel:0911750606">0911 75 0606</a></p>
                    <p>Email: <a href="mailto:duhocuoe@gmail.com">duhocuoe@gmail.com</a></p>
                    <p class="hide-mobile">Zalo: <a href="https://chat.zalo.me/?phone=0941579922" target="_blank">0941579922</a></p>
                    <p class="hide-pc">Zalo: <a href="https://zalo.me/0941579922" target="_blank">0941579922</a></p>
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
