<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vietphuc
 */
$checkOnePage = includes\Bootstrap::bootstrap()->helper->checkOnePage();
if (!$checkOnePage):
?>
<footer class="content boxed boxed-inner">
    <div class="boxed page-inner">
        <section class="section contact-info">
            <div class="container">
                <div class="row-contact-info row">
                    <div class="col-contact-info col-md-6 col-lg-4">
                        <div class="row">
                            <h3 class="col-sm-3 col-md-4">Liên hệ Email</h3>
                            <div class="col-right col-sm-8 col-md-7 col-sm-offset-1 col-md-offset-1">
                                <div class="contact-info-row col-sm-6 col-md-12">
                                    <strong class="text-dark">Tư vấn</strong><br>
                                    hello@vietphucltd.com
                                </div>
                                <div class="contact-info-row col-sm-6 col-md-12 ">
                                    <strong class="text-dark">Hỗ trợ</strong><br>
                                    info@vietphucltd.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-contact-info col-md-6 col-lg-4">
                        <div class="row">
                            <h3 class="col-sm-3 col-md-4">Gọi cho chúng tôi</h3>
                            <div class="col-right col-sm-8 col-md-7 col-sm-offset-1 col-md-offset-1">
                                <div class="contact-info-row col-sm-6 col-md-12">
                                    <strong class="text-dark">Hotline</strong><br>
                                    (028) 123 456 789
                                </div>
                                <div class="contact-info-row col-sm-6 col-md-12 ">
                                    <strong class="text-dark">Hỗ trợ</strong><br>
                                    (028) 123 456 789
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-contact-info col-md-6 col-lg-4">
                        <div class="row">
                            <h3 class="col-sm-3 col-md-4">Đỉa chỉ</h3>
                            <div class="col-right col-sm-8 col-md-7 col-sm-offset-1 col-md-offset-1">
                                <div class="contact-info-row col-sm-6 col-md-12">
                                    21 đường 24 Khu Dân Cư Him
                                    Lam, Xã Bình Hưng, Huyện
                                    Bình Chánh

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <p>© VIETPHUC CONSTRUCTION COMPANY LIMITED 2017.</p>
        <div class="clearfix"></div>
    </div>
</footer>
<?php endif; ?>
</div>
<?php wp_footer(); ?>
</body>
</html>
