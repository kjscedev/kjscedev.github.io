<?php
    require_once('../includes/constants.php');
    $page = HOME_PAGE;
?>

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
    <link rel="stylesheet" media="screen and (min-device-width: 1025px) and (max-device-width: 1920px)" href="../../index.css">
    <!-- MOBILE CSS -->
    <link rel="stylesheet" media="screen and (max-device-width: 1024px)" href="../../mobile.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- SIDEBAR -->
    <?php
        require_once('../includes/components/sidebar.php');
    ?>

    <!-- SOCIAL LINKS -->
    <?php
        require_once('../includes/components/social-links.php');
    ?>

    <section class="rules section">
        <!-- HAMBURGER -->
        <?php
                require_once('../includes/components/hamburger.php');
            ?>

        <!-- LEFT SECTION -->
        <div class="fixed-section">
            <div class="rules-wrapper animated fadeInUp">
                <img class="logo small" src="../../assets/images/logo/skream-logo.svg" alt="Skream Logo">
                <h2 class="main-heading">Rules</h2>
                <br><br>
                <h5 class="heading">Contingency rules</h5>
                <br>
                <p class="note">Winners, Runners-up &amp; Semi-finalists will be awarded points as per the following :
                </p>
                <br>
                <h6 class="heading small">Team Events</h6>
                <div class="content">
                    <ul>
                        <li>The winning team will be awarded 25 points</li>
                        <li>The runners-up team will be awarded 16 points</li>
                        <li>Semi-finalists will be awarded 9 points</li>
                    </ul>
                </div>
                <br>
                <h6 class="heading small">Individual Events</h6>
                <ul class="content">
                    <li>
                        The winning team will be awarded 16 points
                    </li>
                    <li>
                        The runners-up team will be awarded 9 points
                    </li>
                    <li>
                        Semifinalists will be awarded 5 points
                    </li>
                    <li>
                        Points awarded for participation: 2 for individuals, 5 for teams
                    </li>
                    <li>
                        Points will be awarded for online contest. For more details, visit ourFacebook page : <a href="javascript:;">KJSCE SKREAM</a>
                    </li>
                </ul>
                <br>
                <h5 class="heading">General Rules</h5>
                <ul class="content">
                    <li>The tournament is open only to undergraduate students studying in colleges across the country.</li>
                    <li>Students born on or after 1st January 1995 are eligible to participate in the tournament.</li>
                    <li>Football boys is open only to students from engineering colleges.</li>
                    <li>The last date for filling the registration form is <strong>27th December 2018</strong>. Any registration received post the last date will not be taken into consideration.</li>
                    <li>Players are required to carry a bonafide, the team list, a Government ID card, and the ID cards issued by the college for all the matches. All players will have to sign an undertaking before the match. Players will not be allowed to play without fulfilling the aforementioned formalities.</li>
                    <li>The umpires’/referees’ decision is final.</li>
                    <li>Players/teams should report at the venue 45 minutes prior to the match time. If the player/team exceeds this time limit, the player/team will have to forfeit the match.</li>
                    <li>The college and the Skream Organising Committee will not be held responsible for any injury or mishaps sustained during the course of the competition. Misconduct on/off the field will be severely dealt with by the OC.</li>
                    <li>Any disputes should be brought to the notice of the event head or any member of the Skream OC.</li>
                    <li>The Skream OC reserves the right to debar any player/team for failing to meet the required standards of conduct.</li>
                    <li>Prize money is subject to change depending on the number of entries.</li>
                    <li>Football is not included in the contingency points.</li>
                </ul>
                <br>
                <p class="note"><span>NOTE</span> : Football will not be considered in the contingency</p>
            </div>
        </div>
        <!-- END OF LEFT SECTION -->

        <!-- RIGHT SECTION -->
        <div class="rules-info">
            <div class="divider long"></div>
            <h6 class="heading">rules</h6>
        </div>
        <!--END OF RIGHT SECTION -->

        <!-- ADDING THE INIFINTE COUNTER -->
        <?php
            require_once('../includes/components/dark-counters.php');
        ?>
        <!-- END OF INIFINTE COUNTERS -->
    </section>
    <a class="compete-button-bottom" href="http://bit.ly/SkreamRegistration" target="_blank" class="btn">Compete Now</a>
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BOOSTRAP 3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- GLOBAL SCRIPT -->
    <script src="../../index.js"></script>
</body>

</html>
