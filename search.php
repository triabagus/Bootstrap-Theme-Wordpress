<?php
    get_header();
?>   

<main role="main" class="container">
  <div class="row">
    <div class="col blog-main text-center"> 
      <?php if ( have_posts() ) : ?>	                         
        <h1 class="page-title">
          <?php	                        
              /* translators: Search query.*/                        
              printf( __( 'Search Results for: %s', 'bootstrapthemewordpress' ), '<span>' . get_search_query() . '</span>' );
          ?>
        </h1>
      <?php else:  ?>
        <h1 class="page-title"><?php _e( 'Nothing Found', 'bootstrapthemewordpress' ); ?></h1>
      <?php endif; ?> 

      <?php
	    if ( have_posts() ) :
        // Start the Loop.
        while ( have_posts() ) :
          the_post(); 
          /**
           * Run the loop for the search to output the results.
           * If you want to overload this in a child theme then include a file
           * called content-search.php and that will be used instead.                            
           * */
          get_template_part( 'template-parts/content', get_post_format() );
        endwhile; // End the loop.
	
        //pagination
	
      else :
      ?>
          <p>
            <?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bootstrapthemewordpress' ); ?></p>
      <?php
          get_search_form();
      endif;
      ?>
      
    </div><!-- /.blog-main --> 

  </div><!-- /.row -->

</main><!-- /.container -->
<?php
    get_footer();
?>

