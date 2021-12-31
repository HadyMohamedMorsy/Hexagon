<?php /* Template Name: services */ ?>

<?php get_header(); ?>
<div class="overhidden home-page">
<!-- navbar -->
<?php require_once(__DIR__.'/inc/nav.php'); ?>
<!-- navbar -->
<!-- animation -->
<div class="content-animation">
        <div id="anim">
        </div>
</div>
<!-- animation -->
    <div class="container margin-specific-top">
            <div class="buttons-About-Us row justify-content-center parent-image-buttons">
                    <div class="col-lg-8">
                        <div class="row  no-gutters">
                            <div class="buttons-area First-button active col-lg-4 " data-click=".interior">
                                <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257@2x.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                <div class="content-btn">
                                    <button> INTERIOR </button>
                                </div>
                            </div>
                            <div class="buttons-area Secound-button col-lg-4"      data-click = ".EXTERIOR">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257@2x.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                <div class="content-btn">
                                    <button> EXTERIOR </button>
                                </div>
                            </div>
                            <div class="buttons-area Thired-button col-lg-4 "      data-click = ".Construction">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257@2x.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                <div class="content-btn">
                                    <button> CONSTRUCTION SOULUTIONS </button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <?php
            $args = array(
                'post_type' => 'services',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'categories',
                        'field'    => 'slug',
                        'terms'    => array('interior','exterior','construction-soulutions')
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
                    <?php 

                        $cats = get_the_terms(get_the_id() , 'categories');
                        $all_cat = array();
                        foreach($cats as $cat){
                            $all_cat [] = $cat->name;
                        }
                    ?>
                    <div class="row position-relative justify-content-center margin-header-top <?php echo implode(",",$all_cat); ?>">
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
                        <div class="row position-relative justify-content-center margin-header-top <?php echo implode(",",$all_cat); ?>">
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
        <div class="padding-top-catagory">
            <div class="parent-path spicific-cat-parent">
                <h2 class="header-color line">
                    Our Categories
                    <div class="line-path specicfic-catgroys">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/path.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                </h2>
            </div>
            <div class="buttons-About-Us row justify-content-center parent-image-buttons">
                    <div class="col-lg-8">
                        <div class="row  no-gutters">
                                <?php
                                    $terms = get_terms( 'categories' );
                                    foreach ( $terms as $term ) {
                                        if($term->name == "Exihiptions"){
                                            $term_link = get_term_link( $term ); ?>
                                            <div class="buttons-area First-button col-lg-4" data-click= "<?php echo  esc_url( $term_link )?>">
                                                <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                                <img src="<?php echo  get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                                <div class="content-btn">
                                                    <a href="<?php echo  esc_url( $term_link )?>"> <?php echo $term->name ?></a>
                                                </div>
                                            </div> <?php
                                        }
                                    }
                                ?>
                                <?php
                                    $terms = get_terms( 'categories' );
                                    foreach ( $terms as $term ) {
                                        if($term->name == "Commercial"){
                                            $term_link = get_term_link( $term ); ?>
                                            <div class="buttons-area Secound-button col-lg-4" data-click= "<?php echo  esc_url( $term_link )?>">
                                                <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                                <img src="<?php echo  get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                                <div class="content-btn">
                                                    <a href="<?php echo  esc_url( $term_link )?>"> <?php echo $term->name ?></a>
                                                </div>
                                            </div> <?php
                                        }
                                    }
                                ?>
                                <?php
                                    $terms = get_terms( 'categories' );
                                    foreach ( $terms as $term ) {
                                        if($term->name == "RESIDENTIAL"){
                                            $term_link = get_term_link( $term ); ?>
                                            <div class="buttons-area Thired-button col-lg-4" data-click= "<?php echo  esc_url( $term_link )?>">
                                                <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                                <img src="<?php echo  get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                                <div class="content-btn">
                                                    <a href="<?php echo  esc_url( $term_link )?>"> <?php echo $term->name ?></a>
                                                </div>
                                            </div> <?php
                                        }
                                    }
                                ?>
                        </div>
                    </div>
            </div>
            <div class="buttons-About-Us row justify-content-center parent-image-buttons categroys-margin">
                    <div class="col-lg-8">
                        <div class="row  no-gutters">
                        <?php
                            $terms = get_terms( 'categories' );
                            foreach ( $terms as $term ) {
                                if($term->name == "CORPORATES"){
                                    $term_link = get_term_link( $term ); ?>
                                    <div class="buttons-area First-button col-lg-4" data-click= "<?php echo  esc_url( $term_link )?>">
                                        <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                        <img src="<?php echo  get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                        <div class="content-btn">
                                            <a href="<?php echo  esc_url( $term_link )?>"> <?php echo $term->name ?></a>
                                        </div>
                                    </div> <?php
                                }
                            }
                        ?>
                        <?php
                            $terms = get_terms( 'categories' );
                            foreach ( $terms as $term ) {
                                if($term->name == "Hospitality"){
                                    $term_link = get_term_link( $term ); ?>
                                    <div class="buttons-area Secound-button col-lg-4" data-click= "<?php echo  esc_url( $term_link )?>">
                                        <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                        <img src="<?php echo  get_theme_file_uri('/assets/images/catagroys.png' )?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                        <div class="content-btn">
                                            <a href="<?php echo  esc_url( $term_link )?>"> <?php echo $term->name ?></a>
                                        </div>
                                    </div> <?php
                                }
                            }
                        ?>
                        <?php
                            $terms = get_terms( 'categories' );
                            foreach ( $terms as $term ) {
                                if($term->name == "Landscape"){
                                    $term_link = get_term_link( $term ); ?>
                                    <div class="buttons-area Thired-button col-lg-4" data-click= "<?php echo  esc_url( $term_link )?>">
                                        <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                        <img src="<?php echo  get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                        <div class="content-btn">
                                            <a href="<?php echo  esc_url( $term_link )?>"> <?php echo $term->name ?></a>
                                        </div>
                                    </div> <?php
                                }
                            }
                        ?>
                        </div>
                    </div>
            </div>
        </div>

    </div>
    <?php require_once(__DIR__.'/inc/footer.php'); ?>
</div>
<script src="<?php echo  get_theme_file_uri('/assets/js/lottie.js') ?>"></script>
<script src="<?php echo  get_theme_file_uri('/assets/js/animation.js') ?>"></script>
<script src="<?php echo  get_theme_file_uri('/assets/js/buttons.js') ?>"></script>
<?php get_footer(); ?>
