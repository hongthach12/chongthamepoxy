<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chống thấm - Sơn nước - Sơn sàn epoxy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bundle.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNGOsBBZo9vf0Tw4w6aJiilSTFVfQ5GPI"></script>
    <script type="text/javascript" src="js/main.js"></script>
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
            } else {
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
                            <li class="<?php echo $uri == '/dich-vu' ? 'active' : ''; ?>"><a href="/dich-vu">DỊCH VỤ</a></li>
                            <li class="<?php echo $uri == '/giai-phap' ? 'active' : ''; ?>"><a href="/giai-phap">GIẢI PHÁP</a></li>
                            <li class="<?php echo $uri == '/du-an' ? 'active' : ''; ?>"><a href="/du-an">DỰ ÁN</a></li>
                            <li class="<?php echo $uri == '/lien-het' ? 'active' : ''; ?>"><a href="/line-he">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- END HEADER -->

        <!-- HEADER -->
  
        <?php
            foreach($loadHtml as $htmlFile) {
                include($htmlFile);
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
    
</body>


<!-- Mirrored from kccpaint.com.my/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 02:58:05 GMT -->

</html>