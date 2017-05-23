<?php include("functions/contactUs.php") ?>
<?php //$alert_error_message = ''; ?>

<!DOCTYPE html>
<html>
<head>
    <title>KWIQPICK</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="urf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <!--Merriweather Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!--kwiqpick css-->
    <link rel="stylesheet" href="css/style.css">
    <!--Bootstrap Validator-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
    

</head>
<body>

<!--Start Kwiqpick header-->
<section class="kwiqpick-navbar kwiqpick-navbar--weather kwiqpick-navbar--absolute
    kwiqpick-navbar--transparent kwiqpick-navbar--sticky kwiqpick-navbar--auto-collapse">
    <div class="kwiqpick-navbar--section kwiqpick-section">
        <div class="kwiqpick-section--container container">
            <div class="kwiqpick-navbar--container">

                <div class="kwiqpick-navbar--column kwiqpick-navbar--column--s
                    kwiqpick-navbar--brand">
                        <span class="kwiqpick-navbar--brand-link kwiqpick-brand
                        kwiqpick-brand--inline">
                            <span class="kwiqpick-brand--logo"><a href="#"><img
                                    class="kwiqpick-navbar--brand-img kwiqpick-brand--img"
                                    src="" alt="KWIQPICK"></a>
                            </span>
                        </span>
                </div>

                <div class="kwiqpick-navbar--hamburger kwiqpick-hamburger
                    text-white"><span class="kwiqpick-hamburger--line"></span>
                </div>

                <div class="kwiqpick-navbar--column kwiqpick-navbar--menu">
                    <nav class="kwiqpick-navbar--menu-box
                        kwiqpick-navbar--menu-box--inline-right">
                        <div class="kwiqpick-navbar--column">
                            <ul class="kwiqpick-navbar--items
                                kwiqpick-navbar--items--right kwiqpick-buttons
                                kwiqpick-buttons--weather kwiqpick-buttons--right
                                btn-decorator kwiqpick-buttons--active">
                                <li class="kwiqpick-navbar--item"><a
                                        class="kwiqpick-buttons--link btn text-white"
                                        href="index.html">HOME</a></li>
                                <li class="kwiqpick-navbar--item"><a
                                        class="kwiqpick-buttons--link btn text-white"
                                        href="ourstory.html">OUR STORY</a></li>
                                <li class="kwiqpick-navbar--item"><a
                                        class="kwiqpick-buttons--link btn text-white"
                                        href="contact.html">GET IN TOUCH</a></li>
                                <li class="kwiqpick-navbar--item"><a
                                        class="kwiqpick-buttons--link btn text-white"
                                        href="#">CAREERS</a></li>
                            </ul>
                        </div>
                        <div class="kwiqpick-navbar--column">
                            <ul class="kwiqpick-navbar--items
                                kwiqpick-navbar--items--right kwiqpick-buttons
                                kwiqpick-buttons--weather kwiqpick-buttons--right btn-inverse
                                kwiqpick-buttons--active">
                                <li class="kwiqpick-navbar--item"><a
                                        class="kwiqpick-buttons--btn btn btn-default"
                                        href="http://www.kwiqpick.com/">REQUEST A
                                    DEMO</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Kwiqpick Header-->

<!--Start Ourstory Image section-->
<section class="kwiqpick-box kwiqpick-section kwiqpick-section--relative kwiqpick-section--fixed-size kwiqpick-section--half-height kwiqpick-section--bg-adapted kwiqpick-parallax-background kwiqpick-after-navbar" style="background-image: url(images/contact_resized.jpg);">
</section>
<!--End Ourstory Image section-->

<!--Start Contact Form section-->
<section class="container kwiqpick-section kwiqpick-text-section">
    <div class="row">
    <?php
    display_message();
    ?>
        <div class="col-md-10 col-md-offset-1 text-justify">
            <h4>Fill in the details and we will get back to you</h4>
            <form class="clearfix" role="form" action="" method="POST">
                <div class="row">
                    <div class="form-group">
                        <div class="input">
                            <input class="input_fields" placeholder="Name" type="text" name="kp_candid_name" required autocomplete="on">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input class="input_fields" placeholder="Restaurant" type="text" name="kp_restaurant_name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input class="input_fields" placeholder="City" type="text" name="kp_city_name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input class="input_fields" placeholder="Email" type="email" name="kp_email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <input class="input_fields" placeholder="Mobile Number" type="text" name="kp_phone_num" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input">
                            <textarea class="input_fields" placeholder="Message" rows="10" cols="30" name="kp_message" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn button-custom pull-right" value="Contact Us" name="kp_contact">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--End Contact Form section-->

<!--Start Footer Section-->
<section class="kwiqpick-section kwiqpick-section--relative kwiqpick-section--fixed-size kwiqpick-footer-section" style="background-color: #374963;">
    <div class="container kwiqpick-header--center marginTop10">
        <ul class="row center social-icons-section inline-block" style="margin-right: 30px">
            <li class="social-icon-list col-sm-12">
                <a href="https://www.facebook.com/kwiqpick/">
                    <div class="img-circle social-icons icon-facebook" title="Facebook">
                        <i class="fa fa-facebook fa-lg"></i>
                    </div>
                </a>

            </li>
            <li class="social-icon-list col-sm-12">
                <a href="https://www.linkedin.com/company/kwiqpick-services-india-pvt-ltd">
                    <div class="img-circle social-icons icon-linkedin" title="Linkedin">
                        <i class="fa fa-linkedin fa-lg"></i>
                    </div>
                </a>
            </li>
        </ul>
        <div class="kwiqpick-header--center">
            <p class="copyright-info-section copyright-text"><i class="fa fa-copyright"></i> 2017 Kwiqpick</p>
        </div>
    </div>
</section>
<!--End Footer Section-->

<script src="js/jquery-3.2.1.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.js"></script>
<script src="js/jarallax.js"></script>
<script src="plugins/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<script src="js/script.js"></script>
<script src="js/custom.js"></script>
</body>
</html>