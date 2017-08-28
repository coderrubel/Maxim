<?php

function maxim_blog_posts(){
    ob_start(); ?>
<h1>Md Rubel ali</h1>

<?php $blog_post = ob_get_clean();
return  $blog_post;
}
add_shortcode('blog_post','maxim_blog_posts');