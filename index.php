<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chống thấm - Sơn nước - Sơn sàn epoxy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="dgDxlF_6TruTHJrsM63Cbr36jRqKwTiTvCANZh8qwng">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bundle.css">
    <link rel="stylesheet" href="css/hody-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700|Source+Sans+Pro:300,400|Kaushan+Script|Lora|Playfair+Display:700"
        rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:200,400" rel="stylesheet">
    <script>
        function white() {
            if (document.getElementById('tellmewhite').value == 'white') {
                document.getElementById('wall').style.backgroundColor = 'FloralWhite';
            }
        }

        function grey() {
            if (document.getElementById('tellmegrey').value == 'grey') {
                document.getElementById('wall').style.backgroundColor = 'Gainsboro';
            }
        }

        function mint() {
            if (document.getElementById('tellmemint').value == 'mint') {
                document.getElementById('wall').style.backgroundColor = 'MintCream';
            }
        }

        function blue() {
            if (document.getElementById('tellmeblue').value == 'blue') {
                document.getElementById('wall').style.backgroundColor = 'LightSkyBlue';
            }
        }

        function yellow() {
            if (document.getElementById('tellmeyellow').value == 'yellow') {
                document.getElementById('wall').style.backgroundColor = 'LightGoldenRodYellow';
            }
        }

        function red() {
            if (document.getElementById('tellmered').value == 'red') {
                document.getElementById('wall').style.backgroundColor = 'LightCoral';
            }
        }
    </script>
    <style>
        input {
            outline: none;
        }

        input[type=search] {
            -webkit-appearance: textfield;
            -webkit-box-sizing: content-box;
            font-family: inherit;
            font-size: 100%;
        }

        input::-webkit-search-decoration,
        input::-webkit-search-cancel-button {
            display: none;
        }

        input[type=search] {
            background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
            border: solid 1px #ccc;
            padding: 9px 10px 9px 32px;
            width: 55px;
            -webkit-border-radius: 10em;
            -moz-border-radius: 10em;
            border-radius: 10em;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            transition: all .5s;
        }

        input[type=search]:focus {
            width: 130px;
            background-color: #fff;
            border-color: #66CC75;
            -webkit-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
            -moz-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
            box-shadow: 0 0 5px rgba(109, 207, 246, .5);
        }

        input:-moz-placeholder {
            color: #999;
        }

        input::-webkit-input-placeholder {
            color: #999;
        }


        /* Demo 2 */

        #demo-2 input[type=search] {
            width: 15px;
            padding-left: 10px;
            color: transparent;
            cursor: pointer;
        }

        #demo-2 input[type=search]:hover {
            background-color: #fff;
        }

        #demo-2 input[type=search]:focus {
            width: 130px;
            padding-left: 32px;
            color: #000;
            background-color: #fff;
            cursor: auto;
        }

        #demo-2 input:-moz-placeholder {
            color: transparent;
        }

        #demo-2 input::-webkit-input-placeholder {
            color: transparent;
        }
    </style>
    <style>
        @media screen and (max-width: 480px) {
            .row-parallax-bg .parallax-wrapper .parallax-bg {
                background-size: contain;
                background-position: 50% 9%;
            }
        }
    </style>
    
</head>

<body>

    <!-- Preloader-->
    <!--Loader-->
    <?php 
        $fb = "https://www.facebook.com/ChongThamSonNuocEpoxyHaNam/";
        $uri = $_SERVER['REQUEST_URI'];
        $loadHtml = [];
        if ($uri == '/san-pham') {
            $loadHtml = [
                "html/products.php"
            ];
        } else if($uri == '/lien-he') {
            $loadHtml = [
                "html/contact.php"
            ];
        } else if($uri == '/cam-hung') {
            $loadHtml = [
                "html/inspiration.html"
            ];
        }  else {
            $loadHtml = [
                "html/slider.html",
                "html/home.html"
            ];
        }
    ?>
        
    <!-- Loader end -->
    <div id="loader">
        <div class="centrize">
            <div class="center">
                <div class="xboot-loader">
                    <div class="loader-wrapper">
                        <div class="loader-content">
                            <div class="loader-dot dot-1"></div>
                            <div class="loader-dot dot-2"></div>
                            <div class="loader-dot dot-3"></div>
                            <div class="loader-dot dot-4"></div>
                            <div class="loader-dot dot-5"></div>
                            <div class="loader-dot dot-6"></div>
                            <div class="loader-dot dot-7"></div>
                            <div class="loader-dot dot-8"></div>
                            <div class="loader-dot dot-center"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Preloader-->
    <div id="wrapper">

        <!-- HEADER -->
        <nav id="navbar">
            <div class="navbar-wrapper">
                <div class="container">
                    <div class="logo">
                        <a href="/">
                            <img class="logo-light" src="images/logo.jpg" alt="">
                            <!--style="-webkit-filter: drop-shadow(1px 1px 1px #000); filter: drop-shadow(1px 1px 1px #000);"-->
                            <img class="logo-dark" src="images/logo.jpg" alt="">
                            <!--style="-webkit-filter: drop-shadow(1px 1px 1px #000); filter: drop-shadow(1px 1px 1px #000);"-->
                        </a>
                    </div>
                    <div class="menu-extras">
                        <div class="menu-item">
                            <div class="header-socials">
                                <ul>
                                    <li><a target="_blank" href="<?php echo $fb; ?>"><i
                                                class="hc-facebook"></i></a></li>
                                    <!--<li>
								<form id="demo-2">
									<input type="search" placeholder="Search">
								</form>
							</li>-->
                                    <!-- <li class="social-item-instagram"><a target="_blank"
                                            href="https://www.instagram.com/kccpaintmalaysia/"><i
                                                class="hc-instagram"></i></a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="nav-toggle">
                                <a class="menu-toggle" href="#">
                                    <div class="hamburger">
                                        <div class="hamburger-box">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="navigation">
                        <ul class="navigation-menu nav">
                            <li class="<?php echo $uri == '/trang-chu' ? 'active' : ''; ?>" ><a href="/trang-chu">TRANG CHỦ</a></li>
                            <li class="<?php echo $uri == '/san-pham' ? 'active' : ''; ?>"><a href="/san-pham">SẢN PHẨM</a></li>
                            <li class="<?php echo $uri == '/cam-hung' ? 'active' : ''; ?>"><a href="/cam-hung">CẢM HỨNG</a></li>
                            <li class="<?php echo $uri == '/dich-vu' ? 'active' : ''; ?>"><a href="/dich-vu">DỊCH VỤ</a></li>
                            <li class="<?php echo $uri == '/du-an' ? 'active' : ''; ?>"><a href="/du-an">DỰ ÁN</a></li>
                            <li class="<?php echo $uri == '/lien-het' ? 'active' : ''; ?>"><a href="/lien-he">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- END HEADER -->

        <!-- HEADER -->
  
        <?php
            foreach($loadHtml as $htmlFile) {
                @include($htmlFile);
            }
        ?>

        

        <!-- FOOTER -->
        <footer id="footer">
            <div class="footer-widgets"
                style="padding-top: 30px;padding-bottom: 30px;border-bottom: 1px solid #aeaeae;border-top: 1px solid #aeaeae;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <figure class="footer-logo mb-15">
                                    <img src="images/logo.jpg" alt="" style="width: 120px;">
                                </figure>
                                <div class="textwidget">
                                    <p style="color: #333;font-size:12px;">Uy Tín - Chất Lượng - Ưu Việt -  Tận Tâm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy" style="padding-top: 10px;padding-bottom: 10px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="social-list">
                                <li class="social-item-facebook"><a target="_blank"
                                        href="<?php echo $fb; ?>"><i
                                            class="hc-facebook"></i></a>
                                </li>
                                <!-- <li class="social-item-instagram"><a target="_blank"
                                        href="https://www.instagram.com/kccpaintmalaysia/"><i
                                            class="hc-instagram"></i></a>
                                </li> -->
                            </ul>
                        </div>
                        <div class="col-sm-8">
                            <div class="copy-text">
                                <p style="font-size:12px;">Công Ty TNHH Xây Dựng Và Thương Mại HANAM © 2019 | All rights reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> <!-- END FOOTER -->

    </div>
    <style>
        /* HOTLINE */
    .phonering-alo-phone {position:fixed;visibility:hidden;background-color:transparent;width:200px;height:200px;
    cursor:pointer;z-index:200000!important;right:150px;bottom:-50px;right:-50px;display:block;
    -webkit-backface-visibility:hidden;
    -webkit-transform:translateZ(0);
    transition:visibility .5s;
    }
    .phonering-alo-phone.phonering-alo-show {visibility:visible}
    .phonering-alo-phone.phonering-alo-static {opacity:.6}
    .phonering-alo-phone.phonering-alo-hover,.phonering-alo-phone:hover {opacity:1}
    .phonering-alo-ph-circle {width:160px;height:160px;top:20px;left:20px;position:absolute;
    background-color:transparent;border-radius:100%;border:2px solid rgba(30,30,30,0.4);
    opacity:.1;
    -webkit-animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
    animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
    transition:all .5s;
    -webkit-transform-origin:50% 50%;
    -ms-transform-origin:50% 50%;
    transform-origin:50% 50%
    }
    .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle {
        -webkit-animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important;
        animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important
    }
    .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle {
        -webkit-animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important;
        animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important
    }
    .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone:hover .phonering-alo-ph-circle {
        border-color:#00aff2;
        opacity:.5
    }
    .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle {
        border-color:#272d6b;
        opacity:.5
    }
    .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle {
        border-color:#00aff2;
        opacity:.5
    }
    .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle {
        border-color:#ccc;
        opacity:.5
    }
    .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle {
        border-color:#75eb50;
        opacity:.5
    }
    .phonering-alo-ph-circle-fill {width:100px;height:100px;top:50px;left:50px;position:absolute;background-color:#000;
    border-radius:100%;border:2px solid transparent;
    -webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
    animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
    transition:all .5s;
    -webkit-transform-origin:50% 50%;
    -ms-transform-origin:50% 50%;
    transform-origin:50% 50%
    }
    .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle-fill {
        -webkit-animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important;
        animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important
    }
    .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle-fill {
        -webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
        animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
        opacity:0!important
    }
    .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone:hover .phonering-alo-ph-circle-fill {
        background-color:rgba(39,45,107,0.5);
        opacity:.75!important
    }
    .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle-fill {
        background-color:rgba(39,45,107,0.5);
        opacity:.75!important
    }
    .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle-fill {
        background-color:rgba(0,175,242,0.5);
    }
    .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle-fill {
        background-color:rgba(204,204,204,0.5);
        opacity:.75!important
    }
    .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle-fill {
        background-color:rgba(117,235,80,0.5);
        opacity:.75!important
    }
    .phonering-alo-ph-img-circle {
        width:60px;
        height:60px;
        top:70px;
        left:70px;
        position:absolute;
        background:rgba(30,30,30,0.1) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAB/ElEQVR42uya7W3CMBCG31QM4A1aNggTlG6QbpBMkHYC1AloJ4BOABuEDcgGtBOETnD9c1ERCH/lwxeaV8oPFGP86Hy+DxMREW5Bd7gRjSDSNGn4/RiAOvm8C0ZCRD5PSkQVXSr1nK/xE3mcWimA1ZV3JYBZCIO4giQANoYxMwYS6+xKY4lT5dJPreWZY+uspqSCKPYN27GJVBDXheVSQe494ksiEWTuMXcu1dld9SARxDX1OAJ4lgjy4zDnFsC076A4adEiRwAZg4hOUSpNoCsBPDGM+HqkNGynYBCuILuWj+dgWysGsNe8nwL4GsrW0m2fxZBq9rW0rNcX5MOQ9eZD8JFahcG5g/iKT671alGAYQggpYWvpEPYWrU/HDTOfeRIX0q2SL3QN4tGhZJukVobQyXYWw7WtLDKDIuM+ZSzscyCE9PCy5IttCvnZNaeiGLNHKuz8ZVh/MXTVu/1xQKmIqLEAuJ0fNo3iG5B51oSkeKnsBi/4bG9gYB/lCytU5G9DryFW+3Gm+JLwU7ehbJrwTjq4DJU8bHcVbEV9dXXqqP6uqO5e2/QZRYJpqu2IUAA4B3tXvx8hgKp05QZW6dJqrLTNkB6vrRURLRwPHqtYgkC3cLWQAcDQGGKH13FER/NATzi786+BPDNjm1dMkfjn2pGkBHkf4D8DgBJDuDHx9BN+gAAAABJRU5ErkJggg==) no-repeat center center;
        border-radius:100%;
        border:2px solid transparent;
        -webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
        animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin:50% 50%;
        -ms-transform-origin:50% 50%;
        transform-origin:50% 50%
    }

    .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-img-circle {
        -webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important;
        animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important
    }

    .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-img-circle {
        -webkit-animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important;
        animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important
    }

    .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone:hover .phonering-alo-ph-img-circle {
        background-color:#00aff2;
    }

    .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-img-circle {
        background-color:#272d6b;
    }

    .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {
        background-color:#00aff2;
    }

    .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-img-circle {
        background-color:#ccc;
    }

    .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-img-circle {
        background-color:#75eb50
    }

    @-webkit-keyframes phonering-alo-circle-anim {
        0% {
            -webkit-transform:rotate(0) scale(.5) skew(1deg);
            -webkit-opacity:.1
        }

        30% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            -webkit-opacity:.5
        }

        100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            -webkit-opacity:.1
        }
    }

    @-webkit-keyframes phonering-alo-circle-fill-anim {
        0% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
        }

        50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            opacity:.2
        }

        100% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
        }
    }

    @-webkit-keyframes phonering-alo-circle-img-anim {
        0% {
            -webkit-transform:rotate(0) scale(1) skew(1deg)
        }

        10% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg)
        }

        100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg)
        }
    }

    @-webkit-keyframes phonering-alo-circle-anim {
        0% {
            -webkit-transform:rotate(0) scale(.5) skew(1deg);
                    transform:rotate(0) scale(.5) skew(1deg);
            opacity:.1
        }

        30% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
                    transform:rotate(0) scale(.7) skew(1deg);
            opacity:.5
        }

        100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
                    transform:rotate(0) scale(1) skew(1deg);
            opacity:.1
        }
    }

    @keyframes phonering-alo-circle-anim {
        0% {
            -webkit-transform:rotate(0) scale(.5) skew(1deg);
                    transform:rotate(0) scale(.5) skew(1deg);
            opacity:.1
        }

        30% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
                    transform:rotate(0) scale(.7) skew(1deg);
            opacity:.5
        }

        100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
                    transform:rotate(0) scale(1) skew(1deg);
            opacity:.1
        }
    }

    @-webkit-keyframes phonering-alo-circle-fill-anim {
        0% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
                    transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
        }

        50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
                    transform:rotate(0) scale(1) skew(1deg);
            opacity:.2
        }

        100% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
                    transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
        }
    }

    @keyframes phonering-alo-circle-fill-anim {
        0% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
                    transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
        }

        50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
                    transform:rotate(0) scale(1) skew(1deg);
            opacity:.2
        }

        100% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
                    transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
        }
    }

    @-webkit-keyframes phonering-alo-circle-img-anim {
        0% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
                    transform:rotate(0) scale(1) skew(1deg)
        }

        10% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                    transform:rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                    transform:rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                    transform:rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                    transform:rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
                    transform:rotate(0) scale(1) skew(1deg)
        }

        100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
                    transform:rotate(0) scale(1) skew(1deg)
        }
    }

    @keyframes phonering-alo-circle-img-anim {
        0% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
                    transform:rotate(0) scale(1) skew(1deg)
        }

        10% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                    transform:rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                    transform:rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                    transform:rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                    transform:rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
                    transform:rotate(0) scale(1) skew(1deg)
        }

        100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
                    transform:rotate(0) scale(1) skew(1deg)
        }
    }
    </style>
    <div class="hotline">
        <div id="phonering-alo-phoneIcon" class="phonering-alo-phone phonering-alo-green phonering-alo-show">
            <div class="phonering-alo-ph-circle"></div>
            <div class="phonering-alo-ph-circle-fill"></div>
            <div class="phonering-alo-ph-img-circle">
                <a class="pps-btn-img " title="Liên hệ" href="tel:0973733012"> 
                    <img src="images/v8TniL3.png" alt="Liên hệ" width="50" class="img-responsive">
                </a>
            </div>
        </div>
    </div>
    
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bundle.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNGOsBBZo9vf0Tw4w6aJiilSTFVfQ5GPI"></script>
<script type="text/javascript" src="js/main.js"></script>

<!-- Mirrored from kccpaint.com.my/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 02:58:05 GMT -->

</html>