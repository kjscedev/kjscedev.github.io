

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.min.css">
    <!--ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" media="screen and (min-device-width: 1025px) and (max-device-width: 1920px)" href="../../index.css">
    <!-- MOBILE CSS -->
    <link rel="stylesheet" media="screen and (max-device-width: 480px)" href="../../mobile.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <!-- SIDEBAR -->
    
<div class="sidebar-wrapper close">
    <nav>
                <a href="../home/home.php" class="animated faster slideInUp"><li class="sidebar-option animated"> home </li></a>
                <a href="../events/events.php" class="animated faster slideInUp"><li class="sidebar-option animated"> events </li></a>
                <a href="../rules/rules.php" class="animated faster slideInUp"><li class="sidebar-option animated"> rules </li></a>
                <a href="../accomodation/accomodation.php" class="animated faster slideInUp"><li class="sidebar-option animated"> accomodation </li></a>
                <a href="../registration/registration.php" class="animated faster slideInUp"><li class="sidebar-option animated"> registration </li></a>
                <a href="../parvaah/parvaah.php" class="animated faster slideInUp"><li class="sidebar-option animated"> parvaah </li></a>
                <a href="../sponsors/sponsors.php" class="animated faster slideInUp"><li class="sidebar-option animated"> sponsors </li></a>
                <a href="../contact/contact.php" class="animated faster slideInUp"><li class="sidebar-option animated"> contact </li></a>
            </nav>
</div>
    <!-- SOCIAL LINKS -->
    <div class="social-links animated fadeInRight">
    <a href="https://www.facebook.com/KJSCESKREAM/"><i class="social-link fa fa-facebook"></i></a>
    <a href="https://twitter.com/kjsceskream"><i class="social-link fa fa-twitter"></i></a>
    <a href="https://www.snapchat.com/add/kjscelive"><i class="social-link fa fa-snapchat-ghost"></i></a>
    <a href="https://www.instagram.com/kjscelive/"><i class="social-link fa fa-instagram"></i></a>
    <a href="https://www.youtube.com/kjscelive/"><i class="social-link fa fa-youtube-play"></i></a>
</div>
    <section id="contact" class="contact section">
        <!-- HAMBURGER -->
        <div class="hamburger" id="hamburger"></div>
        <!-- LEFT SECTION -->
        <div class="info-section animated fadeInUp">
            <img class="logo" src="../../assets/images/logo/skream-logo.svg" alt="Skream Logo">
            <img class="student-council" src="../../assets/images/contact.png" alt="KJSCE STUDENT COUNCIL INFO">
            <div class="content">
                <p class="sub-heading">For any queries contact : </p>
                <ul>
                                        <li>
                        <strong>
                            Ayush Shah</strong>
                        <ul>
                            <li>
                                <span>Contact No :</span>
                                +919892822280                                <br>
                                <span>Email id : </span>
                                shah.av@somaiya.edu                            </li>
                        </ul>
                    </li>
                                        <li>
                        <strong>
                            Shranik Vora</strong>
                        <ul>
                            <li>
                                <span>Contact No :</span>
                                +918879359893                                <br>
                                <span>Email id : </span>
                                shranik.vora@somaiya.edu                            </li>
                        </ul>
                    </li>
                                        <li>
                        <strong>
                            Rushi Shah</strong>
                        <ul>
                            <li>
                                <span>Contact No :</span>
                                +917588349698                                <br>
                                <span>Email id : </span>
                                rushi.shah@somaiya.edu                            </li>
                        </ul>
                    </li>
                                        <li>
                        <strong>
                            Darshan Gandhi</strong>
                        <ul>
                            <li>
                                <span>Contact No :</span>
                                +918080901151                                <br>
                                <span>Email id : </span>
                                darshan.gandhi@somaiya.edu                            </li>
                        </ul>
                    </li>
                                    </ul>
            </div>
        </div>
        <!-- END OF LEFT SECTION -->

        <!-- RIGHT SECTION -->
        <div class="map-section">
            <div id="googleMap"></div>
        </div>

        <div class="social-links-mobile">
            <a href="https://www.facebook.com/KJSCESKREAM/"><i class="social-link fa fa-facebook"></i></a>
            <a href="https://twitter.com/kjsceskream"><i class="social-link fa fa-twitter"></i></a>
            <a href="https://www.snapchat.com/add/kjscelive"><i class="social-link fa fa-snapchat-ghost"></i></a>
            <a href="https://www.instagram.com/kjscelive/"><i class="social-link fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/kjscelive/"><i class="social-link fa fa-youtube-play"></i></a>
        </div>
        <!--END OF RIGHT SECTION -->
    </section>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BOOSTRAP 3 -->
    <script src="../../assets/plugins/bootstrap%25203/js/bootstrap.min.js"></script>
    <!-- LOADING GOOGLE MAPS -->
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(51.508742, -0.120850),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAt7pu6Lm-fXIW4OnXKwgzSczuUaGn1yr4&callback=myMap"></script>
    <!-- GLOBAL SCRIPT -->
    <script src="../../index.js"></script>
<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_gauravbpunjabi&amp;utm_content=footer_img"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div></body>

</html>