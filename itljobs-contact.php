<!doctype html>


<html lang="en" class="no-js">
    <head>
        <title>ITL JOBS</title>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,900,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

        <link href="css/datepicker.css" rel="stylesheet" />
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />


        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.migrate.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
        <script type="text/javascript" src="js/plugins-scroll.js"></script>
        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <style>

            /* Hide the file input using
            opacity */
            [type=file] {
                position: absolute;
                filter: alpha(opacity=0);
                opacity: 0;
            }
            input, [type="file"] + label {
                border: 1px solid #ccc;
                border-radius: 0;
                font-size: 13px;
                left: 0;
                margin: 0;
                padding: 14px;
                position: relative;
                text-align: left;
                width: 100%;
            }


        </style>

    </head>


    <body onload="document.getElementById('captcha-form').focus()">

        <!-- Container -->
        <div id="container">
            <!-- Header
                ================================================== -->
            <?php
            session_start();
            include 'header.php';
            ?>

            <!-- home-section
               ================================================== -->
            <!--		<section id="home-section" class="slider2">
                    
                                    <div class="tp-banner-container">
                                            <div class="tp-banner" >
                                                    <ul>	 SLIDE  
            
                                                                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
                                                                     MAIN IMAGE 
                                                                    <img src="images/main-slider-bg.jpg"  alt="slidebg1" data-lazyload="images/main-slider-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                                                     LAYERS 
            
                                                                     LAYER NR. 1 
                                                                    
                                                                    <div class="tp-caption medium_thin_grey customin"     
                                                                            data-x="300"
                                                                            data-y="160" 
                                                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                                            data-speed="1000"
                                                                            data-start="1200"
                                                                            data-easing="Power3.easeInOut"
                                                                            data-splitin="none"
                                                                            data-splitout="none"
                                                                            data-elementdelay="0.1"
                                                                            data-endelementdelay="0.1"
                                                                            style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">NEED NOT SEARCH ... JUST CHOOSE</span>
                                                                    </div>
            
                                                                     LAYER NR. 1 
                                                                    <div class="tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0"
                                                                            data-x="300"
                                                                            data-y="230" 
                                                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                                            data-speed="1000"
                                                                            data-start="1600"
                                                                            data-easing="Power3.easeInOut"
                                                                            data-splitin="none"
                                                                            data-splitout="none"
                                                                            data-elementdelay="0.1"
                                                                            data-endelementdelay="0.1"
                                                                            style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Let's get to work
                                                                    </div>
            
                                                                    
                                                                     LAYER NR. 3 
                                                                    <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                                                                            data-x="0"
                                                                            data-y="320" 
                                                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                                            data-speed="1000"
                                                                            data-start="2500"
                                                                            data-easing="Power3.easeInOut"
                                                                            data-splitin="none"
                                                                            data-splitout="none"
                                                                            data-elementdelay="0.1"
                                                                            data-endelementdelay="0.1"
                                                                            data-linktoslide="next"
                                                                            style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn'>LOGIN</a>
                                                                    </div>
            
                                                                     LAYER NR. 4
                                                                    <div class="tp-caption lfr tp-resizeme rs-parallaxlevel-0"
                                                                            data-x="180"
                                                                            data-y="320" 
                                                                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                                            data-speed="1000"
                                                                            data-start="2600"
                                                                            data-easing="Power3.easeInOut"
                                                                            data-splitin="none"
                                                                            data-splitout="none"
                                                                            data-elementdelay="0.1"
                                                                            data-endelementdelay="0.1"
                                                                            data-linktoslide="next"
                                                                            style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn2'>REGISTER</a>
                                                                    </div> 
            
                                                            </li>
                                                    
                                                    </ul>
                                                    <div class="tp-bannertimer"></div>
                                            </div>
                                    </div>
                            </section>-->
            <!-- End home section -->

            <!-- services-offer
                ================================================== -->
            <section class="page-banner-section">
                <div class="container">

                </div>
            </section>

            <section class="register-cont-section">
                <div class="container" >
                    <div class="title-section">
                        <h2>INDIA BRANCHES</h2>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Mumbai</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>A-206, 1st Floor, Vashi Plaza, Plot No.80 & 81, Sector 17, Vashi Navi Mumbai-400703, INDIA </span></li>
                                        <li><i class="fa fa-phone"></i><span> + 91 22 2766 5555 </span><span> +91 22 2765 5556</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Cochin</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>7th Floor, Housing Board Building , Manorama Junction, Panampilly Nagar, Cochin-682036</span></li>
                                        <li><i class="fa fa-phone"></i><span> 0484 - 3015555 </span><span>0484 - 2372050</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">


                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Perinthalmanna</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>M.Y.Complex, Bypass Junction, Calicut Road, Malappuram, Kerala – 679322</span></li>
                                        <li><i class="fa fa-phone"></i><span>04933-232055</span><span>04933-229655</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Angamaly</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>1st Floor, St.George Building, Bank Junction, Angamaly.</span></li>
                                        <li><i class="fa fa-phone"></i><span>0484-2453111 / 2619444 / 2619333</span><span>0484-2459111</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">


                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Calicut</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>International Trade Links, 6/43 , Kannur road, Near Christian college, Opp IMA hall road, Calicut – 673011.</span></li>
                                        <li><i class="fa fa-phone"></i><span>0495-2369843 / 3216555 / 4017555.</span><span>0495-2768543</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Trichy</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>No 41, Al Mas Plaza, 1st Floor, Promenade Road Opp BSNL, Cantonment, Trichy – 620001.</span></li>
                                        <li><i class="fa fa-phone"></i><span>0431-2412736 / 37 / 38</span><span>0431-2412739</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--overseas branches -->
                    <div class="title-section">
                        <h2>OVERSEAS BRANCHES</h2>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Dubai</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Tourism & Travel LLC., Post Box No. 122358, Gargawi Building, Al Qusais, Dubai – UAE</span></li>
                                        <li><i class="fa fa-phone"></i><span>+971 - 42986222   Fax: +971 - 42986333</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Abu Dhabi</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Tourism & Travel LLC, Abu Dhabi, UAE</span></li>
                                        <li><i class="fa fa-phone"></i><span>+971 - 26275253 / +971 - 26275254</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Sharjah</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Tourism & Travel LLC, P B No.67286,Al Roba Street, Opp.K M Trading, AL Roba,Sharjah,U A E.</span></li>
                                        <li><i class="fa fa-phone"></i><span>+971 - 65755166 Fax:+971 - 65755167</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Bahrain - Muharraq</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Tourism & Travels WLL, P.O.BOX 24642, Building No.169, Road 62, Block 203, Airport Avenue - Muharraq, Kingdom of Bahrain</span></li>
                                        <li><i class="fa fa-phone"></i><span>+973 - 17325557</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Bahrain - Manama</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Tourism & Travel WLL., P.O.BOX 24642, Jumana Center, No.38, Wali Al Aahd Avenue - Manama Souq, Kingdom of Bahrain</span></li>
                                        <li><i class="fa fa-phone"></i><span>+973 - 17215526</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Saudi Arabia – Dammam1</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>Opposite Ramez Market, TOYOTA Road, Dammam</span></li>
                                        <li><i class="fa fa-phone"></i><span>+966 - 38376222 /  +966 - 38988997</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">


                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Saudi Arabia – Dammam11</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Leisure  Tourism & Travel Company, Dawasir District,Dhahran Street, Dammam, KSA</span></li>
                                        <li><i class="fa fa-phone"></i><span>+966 - 38353832 / 8301089</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Saudi Arabia – Dammam111</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Leisure Tourism & Travel Co., Al Nakheel District,King Saud Street, Dammam, KSA</span></li>
                                        <li><i class="fa fa-phone"></i><span> +966 - 38302065</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">


                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Saudi Arabia – Riyad1</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Leisure Tourism & Travel Co., Post Box No. 4168, King Faisal Street (Wazeer Street), Riyadh 11491, KSA</span></li>
                                        <li><i class="fa fa-phone"></i><span>+966 - 12862016</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Saudi Arabia – Riyad11</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Leisure Tourism & Travel Co., BATHA COMMERCIAL CENTER, FIRST FLOOR, SHOP NO:84, Riyadh, KSA</span></li>
                                        <li><i class="fa fa-phone"></i><span>+966 - 12760985</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Saudi Arabia – Jubail</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Leisure Tourism & Travel Co., KING ABDUL AZIZ STREET, JUBAIL 31951, AL JUBAIL, KSA</span></li>
                                        <li><i class="fa fa-phone"></i><span>+966 - 33630982</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Saudi Arabia – Jeddah</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Leisure Travel & Tourism Company L.L.C, P.B. No: 41180, Madinah Al Munawwarah Street, Oppo. Al Fitaihi Center, Baghdadiyah District (West), Jeddah 21521, KSA</span></li>
                                        <li><i class="fa fa-phone"></i><span>+966 - 26147222</span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">


                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Qatar</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>ITL Travel and Tourism, Opp. New Arrival Terminal, 29-Saeed Bin Al Aas Street, Um Guwalina (Mughlina), Doha-State of Qatar.</span></li>
                                        <li><i class="fa fa-phone"></i><span>+974 - 44412525  Fax: +974 - 44354872 </span></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-section">
                                <div class="contact-info">
                                    <h2>Bangladesh & Srilanka</h2>
                                    <ul class="information-list">
                                        <li><i class="fa fa-map-marker"></i><span>Also we have associates offices at Bangladesh & Srilanka</span></li>
                                        <li><i class="fa fa-phone"></i></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@itljobs.com">info@itljobs.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </section>
            <!-- End services-offer section -->

            <section class="news-section">
                <div class="container">
                    <div class="title-section">
                        <h1>OUR CLIENTS</h1>
                    </div>
                    <div class="news-box">
                        <div class="arrow-box">
                            <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
                            <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                        </div>

                        <div id="owl-demo" class="owl-carousel">
                            <div class="item news-post">
                                <img src="images/itl-clients-1.jpg" alt="">


                            </div>

                            <div class="item news-post">
                                <img src="images/itl-clients-2.jpg" alt="">


                            </div>

                            <div class="item news-post">
                                <img src="images/itl-clients-3.jpg" alt="">


                            </div>

                            <div class="item news-post">
                                <img src="images/itl-clients-4.jpg" alt="">


                            </div>

                            <div class="item news-post">
                                <img src="images/itl-clients-5.jpg" alt="">


                            </div>

                            <div class="item news-post">
                                <img src="images/itl-clients-6.jpg" alt="">


                            </div>

                            <div class="item news-post">
                                <img src="images/itl-clients-7.jpg" alt="">


                            </div>

                            <div class="item news-post">
                                <img src="images/itl-clients-8.jpg" alt="">


                            </div>

                            <div class="item news-post">
                                <img src="images/itl-clients-9.jpg" alt="">


                            </div>

                            <div class="item news-post">
                                <img src="images/itl-clients-10.jpg" alt="">


                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <!-- footer
                ================================================== -->
            <?php
            include 'footer.php';
            ?>

        </div>
        <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>

        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js"></script>
        <script>
        $("[type=file]").on("change", function () {
            // Name of file and placeholder
            var file = this.files[0].name;
            var dflt = $(this).attr("placeholder");
            if ($(this).val() != "") {
                $(this).next().text(file);
            } else {
                $(this).next().text(dflt);
            }
        });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("select.job").change(function () {
                    var jobcat = $(".job option:selected").val();
                    $.ajax({
                        type: "POST",
                        url: "category.php",
                        data: {jobcat: jobcat}
                    }).done(function (data) {
                        $("#response").html(data);
                        $("#cat").hide();
                    });
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("select.exp").change(function () {
                    var inexp = $(".inexp option:selected").val();
                    var expyrs = $(".expyrs option:selected").val();
                    var abexp = $(".exp option:selected").val();

                    var total = +abexp + +inexp;

                    $.ajax({
                        type: "POST",
                        url: "check.php",
                        data: {total: total, expyrs: expyrs}
                    }).done(function (data) {
                        $("#result").html(data);
                        $("#totalyrs").hide();
                    });
                });
            });
        </script>

        <script>
            $(function () {
                $("#datepicker").datepicker();
            });
        </script>

        <script>

            // When the browser is ready...

            $(function () {

                // Setup form validation on the #register-form element

                $("#contact-form").validate({
                    // Specify the validation rules

                    rules: {
                        name: "required",
                        job_category_id: "required",
                        sub_category: "required",
                        experience: "required",
                        mobile: {
                            required: true,
                            minlength: 10, //or look at the additional-methods.js to see available phone validations
                            maxlength: 15
                        },
                        specification: "required",
                        qualification: "required",
                        current_location: "required",
                        abroad_experience: "required",
                        //day:"required",
                        month: "required",
                        //year:"required",
                        captcha: "required",
                        fileToUpload: "required",
                        email: {required: true, email: true}
                    },
                    // Specify the validation error messages

                    messages: {
                        name: "Please enter your full name",
                        job_category_id: "Please select job applied for",
                        sub_category: "Please select job title",
                        experience: "Please enter year of experience",
                        mobile: {
                            required: "Please enter your mobile number.",
                            minlength: "Enter valid contact number",
                            maxlength: "Enter valid contact number"
                        },
                        specification: "Please enter specification",
                        qualification: "Please enter qualification",
                        current_location: "Please enter current location",
                        abroad_experience: "Please select about abroad experience",
                        //day:"Please enter date of birth",
                        month: "Enter date of birth",
                        //year:"Please enter date of birth",
                        captcha: "Please enter captcha",
                        fileToUpload: "Please upload your resume",
                        email: {required: "Please enter email", email: "Please enter valid email!"}

                    },
                    submitHandler: function (form) {

                        form.submit();

                    }

                });



            });

        </script>
        <!-- Revolution slider -->
        <script type="text/javascript">

            jQuery(document).ready(function () {

                jQuery('.tp-banner').show().revolution(
                        {
                            dottedOverlay: "none",
                            delay: 10000,
                            startwidth: 1140,
                            startheight: 450,
                            hideThumbs: 200,
                            thumbWidth: 100,
                            thumbHeight: 50,
                            thumbAmount: 5,
                            navigationType: "bullet",
                            touchenabled: "on",
                            onHoverStop: "off",
                            swipe_velocity: 0.7,
                            swipe_min_touches: 1,
                            swipe_max_touches: 1,
                            drag_block_vertical: false,
                            parallax: "mouse",
                            parallaxBgFreeze: "on",
                            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                            keyboardNavigation: "off",
                            navigationHAlign: "center",
                            navigationVAlign: "bottom",
                            navigationHOffset: 0,
                            navigationVOffset: "center",
                            shadow: 0,
                            spinner: "spinner4",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            forceFullWidth: "off",
                            hideThumbsOnMobile: "off",
                            hideNavDelayOnMobile: 1500,
                            hideBulletsOnMobile: "off",
                            hideArrowsOnMobile: "off",
                            hideThumbsUnderResolution: 0,
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            startWithSlide: 0,
                            fullScreenOffsetContainer: ".header"
                        });

            });	//ready

            //isotope
            jQuery(document).ready(function () {
                var $container = $('.iso-call');
                // init
                $container.isotope({
                    // options
                    itemSelector: '.services-project, .project-post',
                    masonry: {
                        columnWidth: '.default-size'
                    }
                });
            });	//ready
        </script>

    </body>
</html>