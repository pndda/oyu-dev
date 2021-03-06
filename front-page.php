<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?>


<main>
    <section class="hero__home">
        <div class="container">
            <h1>
                <? the_content() ?>
            </h1>
        </div>
    </section>


    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

    <section class="devision__img" style="background-image:url(<?php echo $url ?>);">

    </section>

    <?  $text = get_field('extra_text'); 

     if($text) : ?>
    <section class="extra__home">
        <div class="container">
            <h1>
                <? echo $text ?>
            </h1>
        </div>
    </section>
    <? else: 
        //nothing
    endif; ?>


    <?  $img = get_field('extra_image'); 

    if($img) : ?>
    <!-- <section class="devision__img" style="background-image:url(<?php echo $img ?>);">

    </section> -->
    <? else: 
   //nothing
endif; ?>

</main>


<? get_footer(); ?>