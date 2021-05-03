<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?> 

<?php woocommerce_content(); ?>

    <? get_footer(); ?> 