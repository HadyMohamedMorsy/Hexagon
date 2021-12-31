<?php get_header(); ?>
<div class="home-page overhidden">
<?php require_once(__DIR__.'/inc/nav.php'); ?>
<div class="content-animation">
        <div id="anim">
        </div>
</div>
<div class="container">
        <div class="margin-specific-top">
            <div class="parent-path spicific-cat-parent">
                    <h2 class="header-color line">
                        Our Categories 
                        <div class="line-path specicfic-catgroys">
                        <img src="<?php echo get_theme_file_uri('/assets/images/path.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
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
                                            <img src="<?php echo get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                                <img src="<?php echo get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
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
                                                <img src="<?php echo get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                                <img src="<?php echo get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
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
                                                <img src="<?php echo get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                                <img src="<?php echo get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                        <img src="<?php echo get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                        <img src="<?php echo get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                        <img src="<?php echo get_theme_file_uri('/assets/images/catagroys.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
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
            <?php
                $category = get_queried_object();
                $current_category_arg =  $category->name;
                $args =  array(
                    'post_type' => 'services',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array (
                            'taxonomy' => 'categories',
                            'field' => 'slug',
                            'terms' => $current_category_arg,
                        )
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

                <?php   $thecontent = get_the_content(); ?>
                    <?php if(!empty($thecontent)): ?>
                    <div class="row position-relative justify-content-center margin-header-top">
                        <div class="col-lg-12">
                            <?php the_post_thumbnail( '', ['class'  => 'w-100', 'alt' => get_bloginfo( 'name' )]); ?>
                            <div class="service-fixed-first">
                                <img src="<?php echo get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                                <div class="header-section">
                                    <h2><?php echo the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="service-fixed-second">
                                <img src="<?php echo get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                            </div>
                        </div>
                        <div class="col-lg-6  order-1">
                            <p class="mt-3  margin-sm text-justify ">
                            <?php  the_content(); ?>
                            </p>
                        </div>
                        <div class="col-lg-6 position-relative order-2">
                            <div class="service-fixed-third-right-texonemy">
                                <img src="<?php echo get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                                <div class="header-mobile">
                                        <h2><?php echo the_title(); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    else: ?>
                    <div class="container cloued-images-services serveces-catagroy">
                        <div class="spacing-sevices">
                            <div class="row position-relative">
                                <div class="single-loop-catagroy-services">
                                <img src="<?php echo get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                                </div>>
                                <div class="col-md-6 offset-sm-0 offset-md-1 mb-5 position-relative">
                                <?php the_post_thumbnail( '', ['class'  => 'w-100 position-relative', 'alt' => get_bloginfo( 'name' )]); ?>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <?php
                    endif ?>    

                <?php else: //It's odd ?>
                    <?php   $thecontent = get_the_content(); ?>
                    <?php if(!empty($thecontent)): ?>
                    <div class="row position-relative justify-content-center margin-header-top">
                        <div class="col-lg-12">
                            <?php the_post_thumbnail( '', ['class'  => 'w-100', 'alt' => get_bloginfo( 'name' )]); ?>
                            <div class="service-fixed-first">
                                <img src="<?php echo get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                                <div class="header-section">
                                    <h2><?php echo the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="service-fixed-second">
                            <img src="<?php echo get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                            </div>
                        </div>
                        <div class="col-lg-6  order-2">
                            <p class="mt-3  margin-sm text-justify ">
                                <?php the_content(); ?>       
                            </p>
                        </div>
                        <div class="col-lg-6 position-relative order-1">
                            <div class="service-fixed-third-left">
                                <img src="<?php echo get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                                <div class="header-mobile">
                                    <h2><?php echo the_title(); ?></h2>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <?php
                    else: ?>
                    <div class="container cloued-images-services serveces-catagroy spicific">
                        <div class="spacing-sevices">
                            <div class="row position-relative">
                                <div class="single-loop-catagroy-services">
                                        <img src="<?php echo get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                                    </div>
                                    <div class="duo-loop-catagroy-services">
                                        <img src="<?php echo get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" >
                                    </div>
                                    <div class="col-md-6 offset-sm-0 offset-md-5 mb-5">
                                        <?php the_post_thumbnail( '', ['class'  => 'w-100 position-relative', 'alt' => get_bloginfo( 'name' )]); ?>
                                    </div>
                            </div>
                        </div>
                    </div>  
                    <?php
                    endif ?> 

                <?php  endif;

                endwhile; wp_reset_postdata(); endif;
            ?>
            <div class="pt-5">
                <div class="parent-path spicific-cat-parent">
                    <h2 class="header-color line">
                        Our Services 
                        <div class="line-path specicfic-catgroys">
                        <img src="<?php echo get_theme_file_uri('/assets/images/path.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                        </div>
                    </h2>
                </div>
                <div class="buttons-About-Us row justify-content-center parent-image-buttons">
                        <div class="col-lg-10">
                            <div class="row  no-gutters">
                                <div class="buttons-area First-button  col-lg-4">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/Path 261.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                    <img src="<?php echo get_theme_file_uri('/assets/images/Path 260.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                    <div class="content-btn">
                                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'interior' ) ) );?>"> INTERIOR </a>
                                    </div>
                                </div>
                                <div class="buttons-area Secound-button col-lg-4">
                                <img src="<?php echo get_theme_file_uri('/assets/images/Path 261.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                <img src="<?php echo get_theme_file_uri('/assets/images/Path 260.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                    <div class="content-btn">
                                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'EXTERIOR' ) ) );?>"> EXTERIOR </a>
                                    </div>
                                </div>
                                <div class="buttons-area Thired-button col-lg-4 ">
                                <img src="<?php echo get_theme_file_uri('/assets/images/Path 261.png' )?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                <img src="<?php echo get_theme_file_uri('/assets/images/Path 260.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                    <div class="content-btn">
                                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'construction-soulutions' ) ) );?>"> CONSTRUCTION SOULUTIONS </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

</div>
<?php require_once(__DIR__.'/inc/footer.php'); ?>
</div>

<script src="<?php echo get_theme_file_uri('/assets/js/lottie.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('/assets/js/animation.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('/assets/js/cat-js.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('/assets/js/buttons.js') ?>"></script>

<?php get_footer(); ?>