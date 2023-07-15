<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">       
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="KGF car Theme" name="keywords">
        <meta content="KGF car Theme" name="description">
        <link href="img/favicon.ico" rel="icon">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                                <h1>Auto<span>Wash</span></h1>
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>Mon - Fri, 8:00 - 9:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>info@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">

            <div id="nav" class="main-menu">
                <?php wp_nav_menu(array(
                    'theme_location'        =>'main-menu',
                    'container'             =>false,
                    'fallback_cb'           =>'defolt_menu',
                )); ?>

            </div>

               <!-- <nav class="main-menu">
                   <ul>
                       <li><a href="#">home</a></li>
                       <li><a href="#">home</a>
                            <ul>    
                                    <li><a href="#">Sub home</a></li>
                                    <li><a href="#">Sub home</a></li>
                                    <li><a href="#">Sub home</a></li>  
                            </ul>                                              
                        </li>
                       <li><a href="#">home</a></li>
                       <li><a href="#">home</a></li>
                       <li><a href="#">home</a></li>
                   </ul>
               </nav> -->




               <div class="get-button">
                   <a class="btn btn-custom" href="#">get apportment</a>
               </div>
            </div>
        </div>
        <!-- Nav Bar End -->
