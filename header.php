<!DOCTYPE html>
<html <?php language_attributes();?>> 
<head>
    <title><?php bloginfo('name'); wp_title();?></title>
    <!-- Meta -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description');?>">  
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <?php
        // Call function hook style wp_enqueue_scripts
        wp_head();
    ?>
</head>
    
<body>

<div class="container">
    
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 col-md-3 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 col-md-6 text-center">
        <?php
          if(function_exists('the_custom_logo')){
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id); 
          }
        ?>
        <img src="<?= $logo[0]; ?>" class="img-logo" />
        <a class="blog-header-logo text-dark" href="<?= home_url();?>"><?php bloginfo('name'); ?></a>
      </div>
      <div class="col-4 col-md-3 d-flex justify-content-end align-items-center">
       
        <a class="text-muted" href="#" data-toggle="collapse" data-target="#demo">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
        </a>
        <div id="demo" class="collapse">
          <form role="search" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" id="<?php echo $unique_id; ?>" name="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'bootstrapthemewordpress'); ?>" value="<?php echo get_search_query(); ?>" />
          </form>
        </div>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
    <?php 
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'container'         => false,
            'menu_class'        => 'nav nav-item',
            'fallback_cb'       => '__return_false',
            'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'             => 2,
            'walker'            => new Tds_Walker_Nav_Primary()
        ) );
    ?> 
    </nav>
  </div>

  <?php
    if (!is_singular('post') && !is_singular('page') && !is_404()) {
  ?> 
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
  <?php
    }
  ?>
  