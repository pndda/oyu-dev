<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo();?> </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head() ?>
</head>

<body>

<header>

        <div class="mobile-navbar ">
            <div class="container">
                <nav class=" d-flex justify-content-between align-items-center trigger-main-nav">
                    <a href="#hero" class='logo__link logo'>
                       
                            BNSD
                        
                    </a>
    
    
    
                    <ul class="mobile-navbar__list d-flex align-items-center ">
                        <!-- <li class="mobile-navbar__list__item">
                            <a href="#" class=" ">
                                <img src="{{directory}}/assets/img/icons/login.svg" width="16" alt="">
                                login
                            </a>
                        </li>
                        <li class="mobile-navbar__list__item ">
                            <a href="#" class=" ">
                                <img src="{{directory}}/assets/img/icons/search_mobile.svg" width="16" alt="">
                                search
                            </a>
                        </li> -->
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

        <div class="menu">
            <nav id="bg-nav" class="mobile-nav">
                <? wp_nav_menu(
                   array(
                       'theme_location' => 'main-menu', 
                       'menu_id'        => 'mobile-nav-wp'
                   )
                   );  ?>
            </nav>

        </div>
    </header>
    <!--HIDDEN SEARCH SECTION-->
    <div class="hidden-nvigation"></div>
    <!--END SEARCH SECTION-->