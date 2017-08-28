<?php 

// Template Name: Blog

get_header(); ?>

<!-- section: blog -->
<section id="blog" class="section">
    <div class="container">
        <h4>Our Blog</h4>
        <!-- Three columns -->
        <div class="row">

<?php
 $blog = new WP_Query(array(
    'post_type'=>'blog',
     
 ));
while ($blog->have_posts()): $blog->the_post();
    ?>
                <div class="span3">
                    <div class="home-post">
                        <div class="max-img">

    <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="post-meta">
                            <i class="icon-file icon-2x"></i>
                            <span class="date"><?php the_date('F d, Y'); ?></span>
                            <span class="tags"><a href="<?php echo get_the_permalink(); ?>">Design</a>, <a href="#">Blog</a></span>
                        </div>
                        <div class="entry-content">
                            <h5><strong><a href="#"><?php the_title(); ?></a></strong></h5>
                            <p>
    <?php
    $reamor = '<button class=" btn-success btn-xs"> <a href="'. get_the_permalink() .'">Read more </a></button>';
    
    echo wp_trim_words(get_the_content(),10,$reamor) ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
<?php endwhile; ?>

        </div>
        <div class="blankdivider30"></div>
        <div class="aligncenter">
         
        </div>
    </div>
</section>


<?php get_footer(); ?>