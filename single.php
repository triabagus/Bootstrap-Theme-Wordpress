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
                previous_post_link();
                next_post_link();
            endif;
        ?>   
    </div><!-- /.blog-main --> 

  </div><!-- /.row -->

</main><!-- /.container -->
<?php
    get_footer();
?>