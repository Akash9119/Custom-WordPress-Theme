<?php

get_header();

while(have_posts()) {
    the_post(); ?>
<div>
  <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>DON'T FORGET TO REPLACE ME LATER</p>
        </div>
      </div>
    </div>

    <?php
    $parant_page = wp_get_post_parent_id(get_the_ID());

    if($parant_page){
    ?>

    <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_the_permalink($parant_page); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parant_page); ?></a> <span class="metabox__main"><?php the_title(); ?></span>
        </p>
      </div>

      <?php }
      ?>
      <div class="container container--narrow page-section">
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_the_permalink($parant_page); ?>"><?php echo get_the_title($parant_page); ?></a></h2>
        <ul class="min-list">
          <?php
          if($parant_page) {
            $theClild_page = $parant_page;
          } else {
            $theClild_page = get_the_ID();
          }
          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $theClild_page,
            'sort_columns' => 'menu_order',
          )
          )
          ?>
      </ul>
      </div>

      <div class="generic-content">
        <p><?php  the_content(); ?></p>
      </div>
    </div>
    </div>
</div>
<?php }
get_footer();
?>