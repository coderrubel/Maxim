<?php get_header(); ?>
<section class="spacer green">
    <div class="container">
        <div class="row">
            <div class="span9 aligncenter flyUp">
                <?php while (have_posts()): the_post(); ?>

                    <h2  style="color:<?php echo get_theme_mod('title_color') ?>">
                        <?php the_title(); ?>
                    </h2>
                    <p>
                        <?php echo get_post_meta($post->ID, 'designation', true); ?>
                    </p>
                    <?php the_post_thumbnail(array('class' => ' my-imge')); ?>
                    <h3 class="post-subtitle">
                        <?php the_content(); ?>
                    </h3>
                    <p class="post-meta">Posted by <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a> on <?php the_time('F m, Y'); ?></p>
                <?php endwhile; ?>
            </div>
            <div class="span3 aligncenter flyUp">
                <?php dynamic_sidebar('rightsidebr'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>