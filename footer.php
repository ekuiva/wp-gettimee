<!-- Start Modal Contactus -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-1">
            <div class="modal-content border-inner-yellow">
                <div class="modal-padding pt-4">
                    <div class="row">
                        <div class="col-md-2 col-lg-2"></div>
                        <div class="col-md-7 col-lg-8 col-7 ml-1-mobile">
                            <h5 class="bold yellow-clr">Request a demo.</h5>
                            <h3 class="text-uppercase">Get One Month of Free Session</h3>
                        </div>
                        <div class="col-md-2 col-lg-2 col-4 pr-4 pt-1">
                            <img class="close" data-dismiss="modal" aria-label="Close"
                                 src="<?php echo get_template_directory_uri() ?>/assets/images/bg-close.png"
                                 class="img-responsive">
                        </div>
                    </div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="34" title="contact gettimee"]'); ?>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container-fluid bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-left footer-space pt-2">
                    <a href="<?php echo get_home_url() ?>"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/images/logo-gettimee.png"></a>
                    <span>&copy; Copyright <?php echo date("Y"); ?></span>
                </div>
                <div class="col-md-4 text-center footer-space pt-2">
                    <a href="https://www.facebook.com/pages/PT-Drife-Solusi-Integrasi/1442772669336796"
                       target="blank"><img class="logo-fb"
                                           src="<?php echo get_template_directory_uri() ?>/assets/images/logo-fb.png"></a>
                </div>
                <div class="col-md-4 text-right footer-space">
                    PT. DRIFE SOLUSI INTEGRASI<br/>
                    +62 21 2854 2877<br/>
                    info@gettimeeapp.com
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery/jquery-3.2.1.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/tether/tether.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap/js/bootstrap.min.js"></script>
<!-- Owlcarousel -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/owl-carousel-v2/dist/owl.carousel.min.js"></script>
<!-- Custom Script Js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/scripts.js"></script>
<!-- Bootstrap Tabcollapse -->
<!-- <script src="<?php //echo get_template_directory_uri()?>/assets/libs/bootstrap-tabcollapse/js/jquery-1.10.1.min.js"></script> -->
<!-- <script src="<?php //echo get_template_directory_uri()?>/assets/libs/bootstrap-tabcollapse/js/bootstrap/bootstrap.js"></script> -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/bootstrap-tabcollapse/bootstrap-tabcollapse.js"></script>
<!-- add recaptcha google -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="g-recaptcha" data-sitekey="6LfK2C0UAAAAAAWDt2as6XoFV7NIQBI9_SjFUhVg"></div>
</html>