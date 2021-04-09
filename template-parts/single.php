<?php
/*
    ===================
        SINGLE POST 
    ===================
*/
?> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header class="entry-header text-center">
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <img src="<?php echo $image[0]; ?>" class="img-fluid mb-2 rounded"> 
        <?php endif; ?>
        
        <?php if(!is_page()):?>
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <p class="blog-post-meta">
                <?php echo get_the_date(); ?> by <a href="#"><?php the_author(); ?></a>
            </p>
        <?php endif;?>

    </header>

    <div class="entry-content clearfix"> 
        <?php 
            the_content();
        ?> 
    </div><!-- .entry-content --> 
</article>