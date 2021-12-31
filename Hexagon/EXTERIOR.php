<?php /* Template Name: EXTERIOR */ ?>
<?php get_header(); ?>
<div class="overhidden home-page">
    
<!-- navbar -->
<?php require_once(__DIR__.'/inc/nav.php'); ?>
<div class="content-animation">
        <div id="anim">
        </div>
    </div>
<!-- navbar -->
<div class="container">
            <?php
                $args = array(
                    'post_type' => 'services',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categories',
                            'field'    => 'slug',
                            'terms'    => array('EXTERIOR')
                        ),
                    ),
                );
                //Set up a counter
                $counter = 0;
                //Preparing the Loop
                $query = new WP_Query( $args );

                //In while loop counter increments by one $counter++
                if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); $counter++;

                //We are in loop so we can check if counter is odd or even
                if($counter % 2 == 0 ) : ?>
                <div>
                        <?php 

                            $cats = get_the_terms(get_the_id() , 'categories');
                            $all_cat = array();
                            foreach($cats as $cat){
                                $all_cat [] = $cat->name;
                            }
                        ?>
                        </div>
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
                                <div class="service-fixed-third-right-services">
                                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                                    <div class="header-mobile">
                                        <h2><?php echo the_title(); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else: //It's odd ?>
                            <?php 

                                $cats = get_the_terms(get_the_id() , 'categories');
                                $all_cat = array();
                                foreach($cats as $cat){
                                    $all_cat [] = $cat->name;
                                }
                            ?>
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
</div>
<?php require_once(__DIR__.'/inc/footer.php'); ?>
</div>
<script src="<?php echo  get_theme_file_uri('/assets/js/lottie.js') ?>"></script>
<script src="<?php echo  get_theme_file_uri('/assets/js/animation.js') ?>"></script>
<?php get_footer(); ?>
