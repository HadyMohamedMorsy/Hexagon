<?php /* Template Name: About us */ ?>

<?php get_header(); ?>
<body>
    <div class="content-animation">
        <div id="anim">
        </div>
    </div>
    <div class="overhidden home-page">
    <?php require_once(__DIR__.'/inc/nav.php'); ?>
        <div class="container mt-5 position-relative pt-5">
            <div class="about-header-hex ">
                <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-5 d-flex justify-content-center">
                <img src="<?php echo  get_theme_file_uri('/assets/images/Group 188.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                </div>
                <div class="tagline-parent col-lg-12 mb-5">
                        <div class="hoxgen-header mb-5">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                            <h3 class="header-color tagline">
                                About Hexagon
                            </h3>
                        </div>
                </div>
                <div class="col-lg-8">
                    <div class="text-white">
                        <p class="text-justify">
                            <?php echo  the_field('about-us'); ?>                       
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <?php
                $args = array( 'post_type' => 'About');
                //Set up a counter
                $counter = 0;
                //Preparing the Loop
                $query = new WP_Query( $args );
                //In while loop counter increments by one $counter++
                if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); $counter++;

                //We are in loop so we can check if counter is odd or even
                if($counter % 2 == 0 ) : ?>
                    <div class="row position-relative justify-content-center margin-header-top">
                        <div class="col-lg-12">
                            <?php the_post_thumbnail( '', ['class'  => 'w-100', 'alt' => get_bloginfo( 'name' )]); ?>
                            <div class="service-fixed-first">
                                <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                                <div class="header-section">
                                    <h2><?php echo the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="service-fixed-second">
                                <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                            </div>
                        </div>
                        <div class="col-lg-6  order-1 text-justify">
                            <p class="mt-3  margin-sm">
                                <?php  the_content(); ?>  
                            </p>
                        </div>
                        <div class="col-lg-6 position-relative order-2">
                            <div class="service-fixed-third-right-about">
                                <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                                <div class="header-mobile">
                                    <h2><?php echo the_title(); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: //It's odd ?>
                    <div class="row position-relative justify-content-center margin-header-top">
                    <div class="col-lg-12">
                        <?php the_post_thumbnail( '', ['class'  => 'w-100', 'alt' => get_bloginfo( 'name' )]); ?>
                        <div class="service-fixed-first">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                            <div class="header-section">
                                <h2><?php echo the_title(); ?></h2>
                            </div>
                        </div>
                        <div class="service-fixed-second">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                        </div>
                    </div>
                    <div class="col-lg-6  order-2 text-justify">
                        <p class="mt-3  margin-sm  ">
                            <?php the_content(); ?>        
                        </p>
                    </div>
                    <div class="col-lg-6 position-relative order-1">
                        <div class="service-fixed-third-left">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" > 
                        <div class="header-mobile">
                            <h2><?php echo the_title(); ?></h2>
                        </div>  
                        </div>
                    </div>
                    </div>
                <?php  endif;
                endwhile; wp_reset_postdata(); endif;
            ?>
        </div>
        <div class="container  position-relative last-sesion">
                <div class="Mision-fixed-hex">   
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                </div>
                <div class="Mision-fixed-hex-secound"> 
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                </div>
                <div class="tagline-parent  flex-here">
                    <div class="hoxgen-header mb-5">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                        <h3 class="header-color tagline">
                                Misiion
                        </h3>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-lg-8 text-justify">
                        <p>
                            <?php echo  the_field('masion'); ?>   
                        </p>
                    </div>
                </div>
        </div>
        <div class="container  position-relative last-sesion ">
                <div class="value-fixed-hex">
                <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                </div>
                <div class="tagline-parent flex-here">
                        <div class="hoxgen-header mb-5 ">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                            <h3 class="header-color tagline">
                                    Vision
                            </h3>
                        </div>
                    </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-justify">
                        <p> 
                            <?php echo  the_field('value'); ?>   
                        </p>
                    </div>
                </div>
        </div>
        <?php require_once(__DIR__.'/inc/footer.php'); ?>
    </div>
    <script src="<?php echo  get_theme_file_uri('/assets/js/lottie.js') ?>"></script>
    <script src="<?php echo  get_theme_file_uri('/assets/js/animation.js')  ?>"></script>
<?php get_footer(); ?>



