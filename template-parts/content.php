<?php
/*
@package sunsettheme

    ===================
        STANDART POST FORMAT
    ===================
*/
?> 
<div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="blog-post-title">
        <?php the_title('<a href="'. esc_url(get_permalink() ) .'" rel="bookmark">', '</a>'); ?> 
    </h2>
    <p class="blog-post-meta">
        <?php echo get_the_date(); ?> by <a href="#"><?php the_author(); ?></a>
    </p>
    <?php the_excerpt('<p class="card-text mb-auto">','</p>');?>
    <a href="<?php the_permalink(); ?>">Continue reading</a>
</div><!-- /.blog-post -->
<hr>
 