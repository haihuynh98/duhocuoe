<?php
get_header();
?>
    <div class="content-page">


        <section class="u-align-center u-clearfix u-section-1" id="carousel_7c74">
            <div class="u-clearfix u-sheet u-sheet-1"><!--product--><!--product_options_json--><!--{"source":""}-->
                <!--/product_options_json--><!--product_item-->
                <div class="u-container-style u-expanded-width u-product u-product-1">
                    <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-sm u-valign-top-xs u-container-layout-1">
                        <!--product_image-->
                        <img alt=""
                             class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-product-control u-image-1"
                             src="<?php echo get_the_post_thumbnail_url()?>"
                             data-image-width="550" data-image-height="308"><!--/product_image-->
                        <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <div class="u-border-3 u-border-custom-color-2 u-line u-line-horizontal u-line-1"></div>
                                <!--product_title-->
                                <h2 class="u-custom-font u-font-merriweather u-product-control u-text u-text-1">
                                    <a class="u-product-title-link" href="#"><!--product_title_content--><?php echo get_the_title()?>
                                        <!--/product_title_content--></a>
                                </h2><!--/product_title--><!--product_content-->
                                <div class="u-product-control u-product-desc u-text u-text-default u-text-2">
                                    <!--product_content_content-->
                                    <p><?php echo get_the_excerpt()?></p><!--/product_content_content-->
                                </div><!--/product_content--><!--product_button--><!--options_json-->
                                <!--{"clickType":"add-to-cart","content":"​Liên hệ"}--><!--/options_json-->
                                <a href="/contact"
                                   class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-grey-75 u-product-control u-btn-1"
                                   autocomplete="off"><!--product_button_content--> Liên hệ
                                    <!--/product_button_content--></a><!--/product_button-->
                            </div>
                        </div>
                    </div>
                </div><!--/product_item--><!--/product-->
                <p class="u-text u-text-default u-text-3" autocomplete="off">&nbsp;&nbsp;</p>
            </div>
        </section>
        <section class="u-align-left u-clearfix u-section-2" id="sec-0924">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="fr-view u-clearfix u-rich-text u-text u-text-1">
                    <?php the_content()?>
                </div>
            </div>
        </section>


        <section class="u-align-center u-clearfix u-image u-section-3" id="carousel_092d" data-image-width="810"
                 data-image-height="1080"
                 style="background-image: url(&quot;/wp-content/uploads/2022/06/pexels-photo-6873095.jpeg&quot;);">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
                <div class="u-container-style u-group u-radius-15 u-shape-round u-white u-group-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">Liên hệ chúng
                            tôi</h2>
                        <div class="u-form u-form-1">
                            <form action="#" method="POST"
                                  class="u-clearfix u-form-spacing-13 u-form-vertical u-inner-form" style="padding: 0;"
                                  source="email" name="form">
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
                                           name="phone оо" class="u-grey-5 u-input u-input-rectangle u-input-2"
                                           required="">
                                </div>
                                <div class="u-form-group u-form-message u-form-group-3">
                                    <label for="message-1015" class="u-label u-label-3"> Lời nhắn</label>
                                    <textarea placeholder="Bạn có thắc mắc, hãy để lại lời nhắn tại đây!" rows="4"
                                              cols="50" id="message-1015" name="message-1"
                                              class="u-grey-5 u-input u-input-rectangle u-input-3"
                                              required=""></textarea>
                                </div>
                                <div class="u-align-center u-form-group u-form-submit">
                                    <a href="#"
                                       class="u-border-none u-btn u-btn-submit u-button-style u-palette-3-base u-btn-1">gửi
                                        tin nhắn<br>
                                    </a>
                                    <input type="submit" value="submit" class="u-form-control-hidden"
                                           wfd-invisible="true">
                                </div>
                                <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you!
                                    Your message has been sent.
                                </div>
                                <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send
                                    your message. Please fix errors then try again.
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
