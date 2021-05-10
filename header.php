<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo();?> </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head() ?>
</head>

<body <? body_class(); ?>>

    <header>
        <div id="navbar" class="main-navbar hide-mobile sticky-top">
            <div class="container">
                <nav class="main-nav trigger-main-nav">
                    <a href="<? bloginfo('url'); ?>" class="navbar-logo">
                        <div class="logo">
                            <? bloginfo('name'); ?>
                        </div>
                    </a>
                    <? wp_nav_menu(
                   array(
                       'theme_location' => 'main-menu', 
                       'menu_id'        => 'main-menu', 
                       'menu_class'     => 'main-menu'
                   )
                   );  ?>
                    <!-- <ul class="main-menu">
                        <li class="menu-item">
                            <a href="index.html">oyu studio</a>
                        </li>
                        <li class="menu-item">
                            <a href="90x.html">90x90</a>
                        </li>
                        <li class="menu-item">
                            <a href="contact.html">contact</a>
                        </li>

                    </ul> -->

                    <ul class="webshop-icon">
                        <li>
                            <a href="<? get_site_url()?>/cart" class="cart">
                                <img src="<? echo get_template_directory_uri(); ?>/assets/img/cart-white.svg"
                                    alt=""></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="mobnavbar" class="mobile-navbar show-on-mobile">
            <div class="container">
                <nav class=" d-flex justify-content-between align-items-center trigger-main-nav">
                    <a href="<? bloginfo('url'); ?>" class="navbar-logo">
                        <div class="logo">
                            <? bloginfo('name'); ?>
                        </div>
                    </a>
                    <ul class="mobile-navbar__list d-flex align-items-center">
                        <li>
                            <a href="<? get_site_url()?>/cart" class="cart">
                                <img src="<? echo get_template_directory_uri(); ?>/assets/img/cart-white.svg"
                                    alt=""></a>
                        </li>

                        <li class="mobile-navbar__list__item">
                            <div class="mobile-navbar__list__item__link hamburger" id="hamburger-1">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

        <div class="show-on-mobile">
            <nav class="mobile-nav">
                <? wp_nav_menu(
                   array(
                       'theme_location' => 'main-menu', 
                       'menu_id'        => 'mobile-menu', 
                       'menu_class'     => 'mobile-menu'
                   )
                   );  ?>
                <!-- <ul class="mobile-menu">
                    <li class="menu-item">
                        <a href="about.html">oyu studio</a>
                    </li>
                    <li class="menu-item">
                        <a href="products.html">90x90</a>
                    </li>
                    <li class="menu-item">
                        <a href="#">cart</a>
                    </li>
                </ul> -->
            </nav>

        </div>
    </header>
    <div class="hidden-nvigation"></div>


  