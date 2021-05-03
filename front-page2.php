<?php get_header(); 
    while(have_posts()){
        the_post();  ?>
<?  }
?>


<!-- START HERO SECTION -->
    <?      $hero = get_field('hero');
                $background_hero = $hero['background'];
                $movie = $hero['movie'];
        ?>
        <section id="movie" class="hero__section" style="background-image: url('<? echo $background_hero ?>')">
        <div class="container-xxl">
            <div class="row">

        <? if ( $background_hero ): ?>
            <? else: ?>
        <section class="hero__section">
                <? endif; ?>
                <!--IF MOVIE-->
                <? if ( $movie ): ?>
                <div class="movie__wrapper">
                    <div class="wrapper">
                       <!-- <video class="video">
                            <source src=" " type="video/mp4" />
                        </video>
                        <button class="playpause">Play movie > </button> -->
                        <? echo $movie ?>
                    </div>
                </div>
                <? else: ?>
                <div class="movie__placeholder">
                
                </div>
                <? endif; ?>
                </div>
                </div>
        </div>
        <img src="<? echo get_template_directory_uri()?>/assets/img/header/header-nutri.png" alt="" class="header-nutri">
    </section>

<!-- END HERO SECTION -->

<!-- START STORY SECTION -->

        <?php   $story1 = get_field('story');
            // var_dump($story1); 
            $background = $story1['background__story'];
            $title = $story1['title__story']; 
            $text = $story1['text']; 
            $direction = $story1['direction'];
            // var_dump($direction);
        if ( $story1 ): ?>
        <section id="verhaal" class="story st-home">
            <!-- DIRECTION TEXT -->
            <img src="<? echo get_template_directory_uri()?>/assets/img/icon/story-plate.png" alt="" class="plate">
            <img src="<? echo get_template_directory_uri()?>/assets/img/icon/story-arm.png" alt="" class="arm-home">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="story__content">
                        
                                    <p>
                                        <? echo $text ?>
                                    </p>
                                    
                                </div>
                                <div class="st-icon">
                                <img src="<? echo get_template_directory_uri()?>/assets/img/icon/BELGISCHPRODUCT.png" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6"></div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- DIRECTION TEXT -->
            <? endif; ?>
        </section>
<!-- END STORY SECTION -->


<!-- START SLIDER SECTION -->

 
                <? 

                $homepageProducts = new WP_Query(
                array(
                    'post_per_page' => 10, 
                    'post_type'     => 'product'
                )
                ); ?>

<section id="smaken" class="slider__section slider__home">
    <div id="carousel" class="swiper-container">
        <div class="swiper-wrapper">

              <?  while($homepageProducts->have_posts() ): 
                    $homepageProducts->the_post(); 
                    $product_link = get_field('hero-prod'); 
                    $choco = $product_link['choco']; 
                    $title = $product_link['title_background'];
                    $BG = get_field('background_homepage'); 
                    ?>
                    <div class="swiper-slide" style="background-image:url('<? echo $BG ?>')">
                        <!-- <a href="<? the_permalink() ?>" class="home-swiper__link">
                        </a> -->
                        <div class="swipe-title__wrapper">
                        <a href="<? the_permalink() ?>" class="swipe-title__link">
                            <div class="swipe-title" style="background-image:url('<? echo $title ?>')"><? the_title();  ?></div>
                        </a>
                        </div>
                        <div class="choco-home__wrapper" >
                            <div class="choco-home" data-swiper-parallax="-400" data-swiper-parallax-scale="1.1">
                            <a href="<? the_permalink() ?>" class="choco-home__link">
                                <img  src="<? echo $choco ?>" alt="" class="swiper-choco choco1">
                                <img src="<? echo $choco ?>" alt="" class="swiper-choco choco2"> 
                                <img  src="<? echo $choco ?>" alt="" class="swiper-choco choco3">
                            </a>
                            </div>
                        </div>
                    </div>
                
                    <?php endwhile;?> 
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next hide-m"></div>
            <div class="swiper-button-prev hide-m"></div>
           
        </div>
    </section>
   
   <? wp_reset_postdata();
    ?>





<!-- END  SECTION -->

<!-- START INFO SECTION -->
  
    <?php 
            while(have_posts()){
                the_post(); } 
    
    if( have_rows('info') ):
     ?>

        <section id="ingred" class="info">
            <div class="container-xxl">
            <?  while( have_rows('info') ) : the_row();
                $logo = get_sub_field('logo');
                $info_content = get_sub_field('text');
                $info_dir = get_sub_field('direction');

            // Load sub field value.
            if( $info_dir == 'left-info') : ?>
                <div class="row <? echo $info_dir ?>">
                    <div class="info__content">
                            <div class="info__image">
                                <img src="<? echo $logo ?>" alt="">
                            </div>
                            <div class="info__text">
                                <? echo $info_content ?>
                            </div>
                    </div>
                </div>
                
            <? elseif( $info_dir == 'right-info'): ?>
                <div class="row <? echo $info_dir ?>">
                    <div class="info__content">
                        <div class="info__image order-md-2">
                            <img src="<? echo $logo ?>" alt="">
                        </div>
                        <div class="info__text order-md-1">
                            <? echo $info_content ?>
                        </div>
                    </div>
                </div>

            <? endif; ?>

            <? endwhile; ?>
            </div>
        
        </section>

        <? else : 
        // Do something...
    endif;
    ?>
<!-- End INFO SECTION -->


<!-- START PRODUCTION SECTION -->
    <?  $prod = get_field('production'); 
    $background_prod = $prod['background']; 
    $img1 = $prod['image'];
    $img2 = $prod['image_2'];
    $img3 = $prod['image_3'];
    $text = $prod['text']; 

    if( $prod) :  ?>
        <? if ( $background_prod ): ?>
            <section id="prod" class="production">
        <? else: ?>
            <section id="prod" class="production" >
                <? endif; ?>
            <div class="prod__header">
                <img src="<? echo get_template_directory_uri() ?>/assets/img/icon/btm-topper.png" alt="" class="prod__header__img "> 
            </div>
            <div class="container-xxl">
                <div class="row">
                    <div class="prod__img">
                        <img src="<? echo get_template_directory_uri() ?>/assets/img/btm-pola1.png" alt="" class="hide-t">
                        <img src="<? echo get_template_directory_uri() ?>/assets/img/btm-pola2.png" alt="" class=" center__img">
                        <img src="<? echo get_template_directory_uri() ?>/assets/img/btm-pola3.png" alt="" class="hide-m">
                    </div>

                    <div class="prod__content">
                        <? echo $text ?>
                    </div>

                </div>
            </div>
    </section>
  </div>

    <? else:  
// Do nothing 
 endif; ?>

 <!-- 
    <div class="eye">
    <div class="pupil"></div> -->

    <!-- END PRODUCTION SECTION -->
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>	
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> -->
    
<script>
    gsap.registerPlugin(ScrollTrigger);
</script>
<!-- EYE FOLLOW MOUSE SCRIPT -->
<!-- <script>
   const pupil = document.querySelector(".pupil");

    document.addEventListener("mousemove", (e) => {
        let x = e.clientX * 100 / window.innerWidth - 50;
        let y = e.clientY * 100 / window.innerHeight - 50;
        
        pupil.style.left = x + "%";
        pupil.style.top = y + "%";
    })
</script> -->


    <? get_footer(); ?>