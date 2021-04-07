<?php
    get_header();
?>   

<main role="main" class="container">
  <div class="row">
    <div class="col blog-main"> 
        <?php
            if( have_posts() ):
                while( have_posts() ):
                    the_post();
                    get_template_part('template-parts/single', get_post_format() );
                endwhile;
        ?>
            <div class="d-flex justify-content-between">
                <?php  
                    $prevPost = get_previous_post();
                    $prevThumbnail = get_the_post_thumbnail( $prevPost->ID, array( 'class' => 'img-fluid img-100'));

                    $nextPost = get_next_post();
                    $nextThumbnail = get_the_post_thumbnail( $nextPost->ID, array( 'class' => 'img-fluid img-100'));

                    previous_post_link('%link', $prevThumbnail.' %title', true);
                    next_post_link('%link', $nextThumbnail.' %title', true);
                ?>
            </div>
        <?php
            endif;
        ?>   
    </div><!-- /.blog-main --> 

  </div><!-- /.row -->

</main><!-- /.container -->
<?php
    get_footer();
?>