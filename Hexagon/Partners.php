<?php /* Template Name: partners */ ?>

<?php get_header(); ?>
<body>
    <div class="overhidden home-page">
    <?php require_once(__DIR__.'/inc/nav.php'); ?>
    <div class="content-animation">
        <div id="anim">
        </div>
    </div>
                    <!-- partners -->
            <div class="Our-partneer position-relative zero-padding">
                    <div class="tagline-parent">
                        <div class="parent-path">
                                <h2 class="header-color line">
                                    Partners
                                    <div class="line-path">
                                        <img src="<?php echo  get_theme_file_uri('/assets/images/path.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                    </div>
                                </h2>
                        </div>
                    </div>
                    <div class="container cloued-images-Partner">
                    <?php
                                $args = array( 'post_type' => 'partners');
                                //Set up a counter
                                $counter = 0;
                                //Preparing the Loop
                                $query = new WP_Query( $args );
                                //In while loop counter increments by one $counter++
                                if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); $counter++;

                                //We are in loop so we can check if counter is odd or even
                                if($counter % 2 == 0 ) : ?>
                                    <div class="row spacing position-relative max-width-center">
                                        <div class="partner-forth-hex" >
                                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')  ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                        </div>
                                        <div class=" col-md-2 col-xl-4  mb-2 max-width-none">
                                        </div>
                                        <div class=" col-md-10 col-xl-8  mb-2">
                                            <div class="iclude-image-duo">
                                                    <?php the_post_thumbnail( '', ['class'=>"position-imge right" ,'alt' => get_bloginfo( 'name' )]); ?>
                                                    <h2 class="header-color position-right  big-vergin"> <span> <?php the_title(); ?>  </span> </h2>
                                                </div>
                                            <h2 class="header-color smal-version">  <?php the_title(); ?>  </h2>
                                        </div>
                                    </div>
                                <?php else: //It's odd ?>
                                    <div class="row spacing position-relative max-width-center">
                                        <div class="col-md-10  mb-2">
                                            <div class="partner-fiveth-hex" >
                                                <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                            </div>
                                            <div class="iclude-image">
                                            <?php the_post_thumbnail( '', ['class'=>"position-imge" ,'alt' => get_bloginfo( 'name' )]); ?>
                                                <h2 class="header-color position-left big-vergin"> <span> <?php the_title(); ?> </span> </h2>
                                            </div>
                                            <h2 class="header-color smal-version">  <?php the_title(); ?>  </h2>
                                        </div>
                                        <div class=" col-md-2 col-xl-4  mb-2 max-width-none">
                                        </div>
                                    </div>
                                <?php  endif;
                                endwhile; wp_reset_postdata(); endif;
                        ?>
                    </div>
            </div>
            <!-- partners -->
            <!-- clients -->
            <div class="Clients position-relative zero-padding">
                    <div class="tagline-parent">
                    <div class="parent-path">
                                <h2 class="header-color line">
                                    Clients
                                    <div class="line-path">
                                        <img src="<?php echo  get_theme_file_uri('/assets/images/path.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                    </div>
                                </h2>
                        </div>
                    </div>
                    <div class="container cloued-images-Partner">
                    <?php
                                $args = array( 'post_type' => 'clients' );
                                //Set up a counter
                                $counter = 0;
                                //Preparing the Loop
                                $query = new WP_Query( $args );
                                //In while loop counter increments by one $counter++
                                if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); $counter++;

                                //We are in loop so we can check if counter is odd or even
                                if($counter % 2 == 0 ) : ?>
                                    <div class="row spacing position-relative max-width-center">
                                        <div class="partner-forth-hex" >
                                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')  ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                        </div>
                                        <div class=" col-md-2 col-xl-4  mb-2 max-width-none">
                                        </div>
                                        <div class=" col-md-10 col-xl-8  mb-2">
                                            <div class="iclude-image-duo">
                                                    <?php the_post_thumbnail( '', ['class'=>"position-imge right" ,'alt' => get_bloginfo( 'name' )]); ?>
                                                    <h2 class="header-color position-right  big-vergin"> <span> <?php the_title(); ?>  </span> </h2>
                                                </div>
                                            <h2 class="header-color smal-version">  <?php the_title(); ?>  </h2>
                                        </div>
                                    </div>
                                <?php else: //It's odd ?>
                                    <div class="row spacing position-relative max-width-center">
                                        <div class="col-md-10  mb-2">
                                            <div class="partner-fiveth-hex" >
                                                <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                            </div>
                                            <div class="iclude-image">
                                            <?php the_post_thumbnail( '', ['class'=>"position-imge" ,'alt' => get_bloginfo( 'name' )]); ?>
                                                <h2 class="header-color position-left big-vergin"> <span> <?php the_title(); ?> </span> </h2>
                                            </div>
                                            <h2 class="header-color smal-version">  <?php the_title(); ?>  </h2>
                                        </div>
                                        <div class=" col-md-2 col-xl-4  mb-2 max-width-none">
                                        </div>
                                    </div>
                                <?php  endif;
                                endwhile; wp_reset_postdata(); endif;
                        ?>
                    </div>
            </div>
            <!-- clients -->
            <?php require_once(__DIR__.'/inc/footer.php'); ?>
    </div>
<script src="<?php echo  get_theme_file_uri('/assets/js/lottie.js') ?>"></script>
<script src="<?php echo  get_theme_file_uri('/assets/js/animation.js') ?>"></script>
<?php get_footer(); ?>




