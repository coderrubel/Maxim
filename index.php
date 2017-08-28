<?php get_header(); ?>
<!-- Header area -->
<div id="header-wrapper" class="header-slider" style="background: #444 url(<?php header_image(); ?>) no-repeat center center fixed;">
    <header class="clearfix">
        <div class="logo">
            <img src="img/logo-image.png" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="main-flexslider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <p class="home-slide-content">
                                    <strong>creative</strong> and passion
                                </p>
                            </li>
                            <li>
                                <p class="home-slide-content">
                                    Eat and drink <strong>design</strong>
                                </p>
                            </li>
                            <li>
                                <p class="home-slide-content">
                                    We loves <strong>simplicity</strong>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
    </header>
</div>
<!-- spacer section -->
<section class="spacer green">
    <div class="container">
        <div class="row">
            <div class="span6 alignright flyLeft">
                <blockquote class="large">
                    There's huge space beetween creativity and imagination <cite>Mark Simmons, Nett Media</cite>
                </blockquote>
            </div>
            <div class="span6 aligncenter flyRight">
                <i class="icon-coffee icon-10x"></i>
            </div>
        </div>
    </div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="about" class="section">
    <div class="container">
        <h4><?php echo get_theme_mod('teamtitle'); ?></h4>
        <div class="row">
            <div class="span4 offset1">
                <div>
                    <h2>We live with <strong>creativity</strong></h2>
                    <p>
                        Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.
                    </p>
                </div>
            </div>
            <div class="span6">
                <div class="aligncenter">
                    
                    <img src="<?php echo get_theme_mod('teamimge'); ?>"  />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset1">
                <?php
                $team = new WP_Query(array(
                    'post_type' => 'team',
                    'posts_per_page' => 5,
                ));

                while ($team->have_posts()): $team->the_post();
                    ?>

                    <div class="span2  flyIn">
                        <div class="people">
                            <?php the_post_thumbnail(array('class' => ' team-thumb img-circle')); ?>
                            <h3><?php the_title(); ?></h3>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- end section: team -->
<!-- section: services -->
<section id="services" class="section orange" style="background: <?php echo get_theme_mod('custom_services') ?>">
    <div class="container">
        <h4 style="color:<?php echo get_theme_mod('title_color'); ?>"><?php echo get_theme_mod('services_title'); ?></h4>
        <!-- Four columns -->
        <div class="row">



            <?php
            $services = new WP_Query(array(
                'post_type' => 'services_post',
                'posts_per_page' => 4,
            ));


            while ($services->have_posts()): $services->the_post();
                ?>
                <div class="span3 animated-fast flyIn" style="background:<?php echo get_theme_mod('box_color') ?>">
                    <div class="service-box" >
                <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <p>
                        <?php the_content(); ?>
                        </p>
                    </div>
                </div>
<?php endwhile; ?>


        </div>
    </div>
</section>
<!-- end section: services -->
<!-- section: works -->

<!--
<section id="works" class="section">
<div class="container clearfix">
   <h4>Our Works</h4>
<!-- portfolio filter -->
<!-- 
<div class="row">
   <div id="filters" class="span12">
      <ul class="clearfix">
         <li><a href="#" data-filter="*" class="active">
         <h5>All</h5>
         </a></li>
         <li><a href="#" data-filter=".web">
         <h5>Web</h5>
         </a></li>
         <li><a href="#" data-filter=".print">
         <h5>Print</h5>
         </a></li>
         <li><a href="#" data-filter=".design">
         <h5>Design</h5>
         </a></li>
         <li><a href="#" data-filter=".photography">
         <h5>Photography</h5>
         </a></li>
      </ul>
   </div>
<!-- END PORTFOLIO FILTERING -->

</div>
<div class="row">
    <div class="span12">
        <div id="portfolio-wrap">
            <!-- portfolio item -->

            <div class="portfolio-item grid print photography">
                <div class="portfolio">
                    <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                        <img src="img/works/1.png" alt="" />
                        <div class="portfolio-overlay">
                            <div class="thumb-info">
                                <h5>Portfolio name</h5>
                                <i class="icon-plus icon-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item grid print design web">
                <div class="portfolio">
                    <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                        <img src="img/works/2.png" alt="" />
                        <div class="portfolio-overlay">
                            <div class="thumb-info">
                                <h5>Portfolio name</h5>
                                <i class="icon-plus icon-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            -->

            <!-- end portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item grid print design">
                <div class="portfolio">
                    <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                        <img src="img/works/3.png" alt="" />
                        <div class="portfolio-overlay">
                            <div class="thumb-info">
                                <h5>Portfolio name</h5>
                                <i class="icon-plus icon-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item grid photography web">
                <div class="portfolio">
                    <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                        <img src="img/works/4.png" alt="" />
                        <div class="portfolio-overlay">
                            <div class="thumb-info">
                                <h5>Portfolio name</h5>
                                <i class="icon-plus icon-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item grid photography web">
                <div class="portfolio">
                    <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                        <img src="img/works/5.png" alt="" />
                        <div class="portfolio-overlay">
                            <div class="thumb-info">
                                <h5>Portfolio name</h5>
                                <i class="icon-plus icon-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item grid photography web">
                <div class="portfolio">
                    <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                        <img src="img/works/6.png" alt="" />
                        <div class="portfolio-overlay">
                            <div class="thumb-info">
                                <h5>Portfolio name</h5>
                                <i class="icon-plus icon-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item grid photography web">
                <div class="portfolio">
                    <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                        <img src="img/works/7.png" alt="" />
                        <div class="portfolio-overlay">
                            <div class="thumb-info">
                                <h5>Portfolio name</h5>
                                <i class="icon-plus icon-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item grid photography">
                <div class="portfolio">
                    <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                        <img src="img/works/8.png" alt="" />
                        <div class="portfolio-overlay">
                            <div class="thumb-info">
                                <h5>Portfolio name</h5>
                                <i class="icon-plus icon-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item grid photography web">
                <div class="portfolio">
                    <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                        <img src="img/works/9.png" alt="" />
                        <div class="portfolio-overlay">
                            <div class="thumb-info">
                                <h5>Portfolio name</h5>
                                <i class="icon-plus icon-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item grid design web">
                <div class="portfolio">
                    <a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
                        <img src="img/works/10.png" alt="" />
                        <div class="portfolio-overlay">
                            <div class="thumb-info">
                                <h5>Portfolio name</h5>
                                <i class="icon-plus icon-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end portfolio item -->
        </div>
    </div>
</div>
</div>
</section>
<!-- spacer section -->
<section class="spacer bg3">
    <div class="container">
        <div class="row">
            <div class="span12 aligncenter flyLeft">
                <blockquote class="large">
                    We are an established and trusted web agency with a reputation for commitment and high integrity
                </blockquote>
            </div>
            <div class="span12 aligncenter flyRight">
                <i class="icon-rocket icon-10x"></i>
            </div>
        </div>
    </div>
</section>
<!-- end spacer section -->
<!-- section: blog -->
<section id="blog" class="section">
    <div class="container">
        <h4>Our Blog</h4>
        <!-- Three columns -->
        <div class="row">

<?php
 $blog = new WP_Query(array(
    'post_type'=>'blog',
     'posts_per_page'=>4,
     
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
                            <span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
                        </div>
                        <div class="entry-content">
                            <h5><strong><a href="#"><?php the_title(); ?></a></strong></h5>
                            <p>
    <?php
    $reamor = '<button class=" btn-success btn-xs"><a href="'.  get_the_permalink().'">Read more</a></button>';
    
    echo wp_trim_words(get_the_content(),10,$reamor) ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
<?php endwhile; ?>

        </div>
        <div class="blankdivider30"></div>
        <div class="aligncenter">
            <a href="<?php get_permalink();  ?>" class="btn btn-large btn-theme">More blog post</a>
        </div>
    </div>
</section>

<!-- end spacer section -->
<!-- section: contact -->
<section id="contact" class="section green">
    <div class="container">
        <h4>Get in Touch</h4>
        <p>
            Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
        </p>
        <div class="blankdivider30">
        </div>
        <div class="row">
            <div class="span12">
                <div class="cform" id="contact-form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="row">
                            <div class="span6">
                                <div class="field your-name form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="field your-email form-group">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="field subject form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="field message form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <input type="submit" value="Send message" class="btn btn-theme pull-left">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ./span12 -->
        </div>
    </div>
</section>
<?php get_footer(); ?>