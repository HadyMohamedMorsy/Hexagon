<?php /* Template Name: Mediahub */ ?>

<?php get_header(); ?>
            <!-- magitub -->
<div class="home-page overhidden">
    <?php require_once(__DIR__.'/inc/nav.php'); ?>
    <div class="content-animation">
        <div id="anim">
        </div>
    </div>
            <div class="Mediahub position-relative Mediahub-page">
                    <div class="Mediahub-first-hex">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="Mediahub-secound-hex">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>

                    <div class="parent-path">
                            <h2 class="header-color line">
                                Mediahub
                                <div class="line-path">
                                    <img src="<?php echo  get_theme_file_uri('/assets/images/path.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                </div>
                            </h2>
                    </div>
                    <div class="content-blog">
                    </div>
                    <div class="tagline-parent">
                        <div class="hoxgen-header zero-padding-home" style="padding-top: 275px">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png' )?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                            <h3 class="header-color tagline">
                                latest Blogs
                            </h3>
                        </div>
                    </div>
                    <div class="blog-latest-person container">
                    <?php
                        $args = array( 'post_type' => 'Post');
                        //Set up a counter
                        //Preparing the Loop
                        $query = new WP_Query( $args );
                        //In while loop counter increments by one $counter++
                        if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="row margin-medihub">
                                <div class="col-lg-3 image-person position-relative spacing-sepecial-blog">
                                    <?php the_post_thumbnail( '', [ 'alt' => get_bloginfo( 'name' )]); ?>
                                    <div class="side-Mediahub-secound-hex">
                                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                        <h2 class="Author"><?php echo  the_field('author'); ?> </h2>
                                        <h2 class="person-name"> <?php echo  the_field('person'); ?></h2>
                                    </div>
                                </div>
                                <div class="col-lg-9 blog-text max-width-margin">
                                    <div class="cont-p text-justify ">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php    endwhile; wp_reset_postdata(); endif; ?>
                    </div>
            </div>
            <!-- mahitub -->
            <!-- news -->
            <div class="news position-relative">
                    <div class="news-first-hex">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="news-secound-hex">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="news-fivth-hex">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                        <div class="tagline-parent">
                            <div class="hoxgen-header">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                <h3 class="header-color tagline">
                                    latest News
                                </h3>
                            </div>
                        </div>
                        <div class="news-last container">
                            <?php
                            $args = array( 'post_type' => 'news');
                            //Preparing the Loop
                            $query = new WP_Query( $args );
                            //In while loop counter increments by one $counter++
                            if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 image-news position-relative">
                                    <?php the_post_thumbnail( '', [ 'alt' => get_bloginfo( 'name' )]); ?>
                                        <div class="the-title-news">
                                            <h1><?php the_title() ?> <span> <?php the_time('F j, Y'); ?></span></h1>
                                        </div>
                                        <div class="news-forth-hex">
                                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                        </div>
                                        <div  class="news-thired-hex">
                                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                        <h2 class="hapining"> <?php echo  the_field('happining'); ?></h2>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row justify-content-center margin-medihub">
                                    <div class="col-lg-12 margin-top-news ">
                                        <div class="content text-justify">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php    endwhile; wp_reset_postdata(); endif; ?>
                    </div>
             </div>
            <!-- news -->
            <?php require_once(__DIR__.'/inc/footer.php'); ?>
</div>
<script src="<?php echo  get_theme_file_uri('/assets/js/lottie.js') ?>"></script>
<script src="<?php echo  get_theme_file_uri('/assets/js/animation.js') ?>"></script>
<?php get_footer(); ?>