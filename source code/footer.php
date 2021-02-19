<style>
<?php include 'css/footer.css'; ?>
</style>

<footer id="footer">

    <div class="container pt-3">
        <!-- <div class="row pb-3 mb-3" style="border-bottom: 1px solid #cccc;">
            <div class="col-8 footer-contact py-2 pl-4 mt-0 mb-0 text-center"
                 style="display: flex;flex-direction: row;justify-content: left;align-items: flex-start;">
                <div class="fb-like" data-href="https://www.facebook.com/HelloClickCashBack/" data-width=""
                     data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
            </div>
            <div class="col-4 social-links text-center text-md-right py-2 pt-md-1 ">

                <a href="https://www.facebook.com/HelloClickCashBack/ " target="_blank " class="facebook"
                   style="background: #4267B2 !important;"><i class="fa fa-facebook"
                                                              style="color:#fcfcfc !important;"
                                                              aria-hidden="true"></i></a>

                <a href="https://www.linkedin.com/company/clickcashback/about/ " target="_blank " class="linkedin"
                   style="background: #2867B2 !important;"><i class="fa fa-linkedin"
                                                              style="color:#fcfcfc !important;"
                                                              aria-hidden="true"></i></a>

            </div>
        </div> -->
        <div class="row">
            <div class="footer-links col-6 col-xs-6 col-lg-4">
                <h4 class="footer-head">Insurance</h4>
                <ul>
                    <li><span class="iconify chevron-green" data-icon="bx-bx-chevron-right"
                              data-inline="false"></span>
                        <a class="trigger" href="#">Car&nbsp;Insurance</a>
                    </li>
                    <li><span class="iconify chevron-green" data-icon="bx-bx-chevron-right"
                              data-inline="false"></span>
                        <a class="trigger" href="#">Home&nbsp;Insurance</a>
                    </li>
                    <li><span class="iconify chevron-green" data-icon="bx-bx-chevron-right"
                              data-inline="false"></span>
                        <a class="trigger" href="#">Maid&nbsp;Insurance</a>
                    </li>
                    <li><span class="iconify chevron-green" data-icon="bx-bx-chevron-right"
                              data-inline="false"></span>
                        <a class="trigger" href="#">Motorcyle&nbsp;Insurance</a>
                    </li>
                    <li><span class="iconify chevron-green" data-icon="bx-bx-chevron-right"
                              data-inline="false"></span>
                        <a class="trigger" href="#">Personal&nbsp;Accident</a>
                    </li>
                    <li><span class="iconify chevron-green" data-icon="bx-bx-chevron-right"
                              data-inline="false"></span>
                        <a class="trigger" href="#">Travel&nbsp;Insurance</a>
                    </li>
                </ul>
            </div>

            <div class="px-2 footer-links col-6 col-xs-6">
                <h4 class="footer-head">Our Company</h4>
                <ul id="sitemap">
                    <li><span class="iconify chevron-green" data-icon="bx-bx-chevron-right"
                              data-inline="false"></span>
                        <a class="trigger" href="#">Terms of Use</a>
                    </li>
                    <li><span class="iconify chevron-green" data-icon="bx-bx-chevron-right"
                              data-inline="false"></span>
                        <a class="trigger" href="#">Privacy Policy</a>
                    </li>
                    <li><span class="iconify chevron-green" data-icon="bx-bx-chevron-right"
                              data-inline="false"></span>
                        <a class="trigger" href="#">Careers</a>
                    </li>
                    <li><span class="iconify chevron-green" data-icon="bx-bx-chevron-right"
                              data-inline="false"></span>
                        <a class="trigger" href="#">Parent Companies</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer_mobile col-lg-12 col-md-12 col-sm-12 col-12 b-1 d-flex d-lg-none justify-content-center text-white">
        <strong>Contact Us:&nbsp;</strong>&nbsp;ecics_support@ecics.com.sg<br>
    </div>

    <div class="container d-md-flex py-4 ">

        <div class="mr-md-auto text-center text-md-left ">
            <div class="copyright " style="display: flex;flex-direction: row;font-size:12px;">
                <img src="images/assets/sg-flag.png " alt=" " style="width: 30px;height: 18px;"> &nbsp;&nbsp;©&nbsp;2021&nbsp;<strong><span>ECICS Limited</span></strong>.
                All Rights Reserved
            </div>

        </div>
    </div>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

<!-- owl carousel -->
<script src="vendor/owlcarousel/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        var productsOwl = $('.banner-carousel');
        productsOwl.owlCarousel({
            // margin: 10,
            loop: true,
            // dots: true,
            autoHeight: true,
            autoplay: 1,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        var promoOwl = $('.promo-carousel');
        promoOwl.owlCarousel({
            // margin: 10,
            loop: true,
            dots: false,
            autoplay: 1,
            autoHeight: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        });

        $('.promo-right-btn').click(function() {
            promoOwl.trigger('next.owl.carousel');
        });
// Go to the previous item
        $('.promo-left-btn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            promoOwl.trigger('prev.owl.carousel', [300]);
        });

    });

</script>