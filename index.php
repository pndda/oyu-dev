<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?> 
  <div class="container">
      <?  $classes = get_body_class();
        if(in_array('page-contact',$classes)) :?>
            <div class="page-container" >
            <? the_content() ?>
            </div>
      <?  $classes = get_body_class();
        elseif(in_array('page-sample-page',$classes)) :?>
        <div class="page-container" >
        <? the_content() ?>
        </div>
    <? else : ?> 
    <? the_content() ?>
    <? endif; ?>
</div>

    <? get_footer(); ?> 