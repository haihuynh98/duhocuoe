<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
</div><!-- #content -->
<?php global $hideFooter;
if (!$hideFooter) { ?>
    <section class="footer-form" id="footer-form" style="background-image: url('/wp-content/themes/duhocuoe/images/background-section-1.png')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <h3 class="section-title">ĐĂNG KÝ TƯ VẤN</h3>
                    <form action="/" name="advise-form" id="advise_form" class="advise-form">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="name" name="name" placeholder="Họ và tên">
                            </div>
                            <div class="col-6">
                                <input type="text" class="phone" name="phone" placeholder="Số điện thoại">
                            </div>
                            <div class="col-6">
                                <input type="text" class="science-care" name="science_care" placeholder="Khóa học quan tâm">
                            </div>
                            <div class="col-6">
                                <input type="text" class="email" name="email" placeholder="Email">
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
                <div class="col-md-4 col-12 d-flex align-items-center justify-content-center">
                    <div class="sitemap" id="sitemap">
                        <h3>Liên kết trang</h3>
                        <ul class="sitemap-list">
                            <li><a href="/">Trang chủ</a></li>
                            <li><a href="/">Liên hệ</a></li>
                            <li><a href="/">Giới thiệu</a></li>
                            <li><a href="/">Tin tức</a></li>
                        </ul>
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
