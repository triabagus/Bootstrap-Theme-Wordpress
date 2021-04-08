<?php
/*
    ===================
        THEME FUNCTIONS
    ===================
*/
function tds_theme_support(){
    // Add dynamic support theme
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','tds_theme_support');

/*
    ===================
        COMMENTS FUNCTIONS 
    ===================
*/
function tds_comments_post($onlyComments = false){
    $comments_num = get_comments_number();
    
    if(comments_open()){
        if($comments_num == 0){
            $comments = __('No Comments');
        }elseif($comments_num > 1){
            $comments = $comments_num. __(' Comments');
        }else{
            $comments = __('1  Comments');
        }

        $comments = '<a class="comments-link" href="'.get_comments_link().'">'.$comments.'</a>';
    }else{
        $comments = __('Comments close');
    }

    if($onlyComments){
        return $comments;
    }

    $tags       = get_the_tag_list('<div class="tags-list"><span class="sunset-icon sunset-tag"></span> ',' ','</div>');

    return '<div class="post-footer-container"><div class="row"><div class="col-12 col-sm-6">'.$tags.'</div><div class="col-12 col-sm-6 text-right">'.$comments.'</div></div></div>';
}
/*
    ===================
        SIDEBAR FUNCTIONS 
    ===================
*/
function btw_sidebar_init(){
    register_sidebar( array(
        'name'          => esc_html('Primary Sidebar', 'Bootstrap Theme Wordpress'),
        'id'            => 'btw-sidebar',
        'description'   => 'Dynamic sidebar right',
        'before_widget' => '<section id="%1$s" class="btw-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));
}

add_action('widgets_init', 'btw_sidebar_init');