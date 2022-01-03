<?php /* Template Name: Home */ ?>
<!-- create header -->
<?php get_header(); ?>  
<!-- create header -->
<body>
    <div class="content-animation">
            <div id="anim">
            </div>
    </div>
    <!-- home page -->
        <div class="home-page overhidden" id="content">
            <!-- navbar -->
            <?php require_once(__DIR__.'/inc/nav.php'); ?>
            <!-- navbar -->

            <!-- slide show -->
            <div class="slider-show position-relative container">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"  class="slide-first-hex"/>
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>" class="slide-sexound-hex"/>
                    <div class="carousel-images row justify-content-center ml-2 mr-2 position-relative">
                        <?php
                            $imageone = get_field('image-slider-one');
                            $imageTwo=  get_field('image-slider-two');
                            $imageThree = get_field('image-slider-three');
                            $imagefour = get_field('image-slider-four');
                            $imagefive = get_field('image-slider-five');
                            $imagesix = get_field('image-slider-six');
                            $imagesiven = get_field('image-slider-siven');
                            $imageeight = get_field('image-slider-eight');
                            if( !empty( $imageone ) ): ?>
                                <img src="<?php echo esc_url($imageone['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="active col-lg-12"/>
                            <?php endif; ?>
                            <?php if( !empty( $imageTwo ) ): ?>
                                <img src="<?php echo esc_url($imageTwo['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="col-lg-12"/>
                            <?php endif; ?>
                            <?php if( !empty( $imageThree ) ): ?>
                                <img src="<?php echo esc_url($imageThree['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="col-lg-12"/>
                            <?php endif; ?>
                            <?php if( !empty( $imagefour ) ): ?>
                                <img src="<?php echo esc_url($imagefour['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="col-lg-12"/>
                            <?php endif; ?>
                            <?php if( !empty( $imagefive ) ): ?>
                                <img src="<?php echo esc_url($imagefive['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="col-lg-12"/>
                            <?php endif; ?>
                            <?php if( !empty( $imagesix ) ): ?>
                                <img src="<?php echo esc_url($imagesix['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="col-lg-12"/>
                            <?php endif; ?>
                            <?php if( !empty( $imagesiven ) ): ?>
                                <img src="<?php echo esc_url($imagesiven['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="col-lg-12"/>
                            <?php endif; ?>
                            <?php if( !empty( $imageeight ) ): ?>
                                <img src="<?php echo esc_url($imageeight['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="col-lg-12"/>
                            <?php endif; ?>
                                <div class="curosel-pointer">
                                    <div class="pointer active" date-images = "0"></div>
                                    <div class="pointer" date-images= "1"></div>
                                    <div class="pointer" date-images = "2"></div>
                                    <div class="pointer" date-images = "3"></div>
                                    <div class="pointer" date-images = "4"></div>
                                    <div class="pointer" date-images = "5"></div>
                                    <div class="pointer" date-images = "6"></div>
                                    <div class="pointer" date-images = "7"></div>
                                </div>

                    </div>
                    <div class="right" >
                        <img src="<?php echo get_theme_file_uri('/assets/images/right.png')?>" alt= "    <?php echo get_bloginfo( 'name' )?>" />
                    </div>
                    <div class="left">
                        <img src="<?php echo get_theme_file_uri('/assets/images/left.png')?>" alt= "     <?php echo get_bloginfo( 'name' )?>" />
                    </div>
                    <div class="image-under-slider row justify-content-center ml-2 mr-2">
                        <img src="<?php echo get_theme_file_uri('/assets/images/infinite.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>" class="col-lg-4 col-sm-12"/>
                    </div>
            </div>
            <!-- slide show -->

            <!-- about -->
            <div class="parent-about  position-relative">
                <div class="about-secound-hex">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                </div>
                <div class="about-us position-relative container">
                    <div class="about-first-hex">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>

                    <div class="about-Thired-hex">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="who-we-are row justify-content-center Content-about">
                        <div class="parent-path">
                            <h2 class="header-color line">
                                ABOUT US
                                <div class="line-path">
                                    <img src="<?php echo  get_theme_file_uri('/assets/images/path.png')?>" alt = " <?php echo get_bloginfo( 'name' )?>"/>
                                </div>
                            </h2>
                        </div>
                        <div class="col-lg-12 mb-5 text-center">
                            <p >Hexa is number six in Greek which symbolizes happiness
                            </p>
                        </div>
                        <div class="tagline-parent">
                            <div class="hoxgen-header mb-5">
                                <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png')  ?>" alt = " <?php echo get_bloginfo( 'name' )?>"/>
                                <h3 class="header-color tagline">
                                    About Hexagon
                                </h3>
                            </div>
                        </div>
                        <div class="About-all-hex col-lg-8 text-center">
                            <p class="Who-We-Are  partnerall active">
                                <?php echo  the_field('who-we-are'); ?>                       
                            </p>
                            <p class="What-We-do  partnerall">
                                <?php echo  the_field('what-we-do'); ?>                       
                            </p>
                            <p class="Where-we-work partnerall">
                                <?php echo  the_field('where-we-work'); ?>                       
                            </p>
                        </div>
                    </div>
                    <div class="buttons-About-Us row justify-content-center parent-image-buttons">
                        <div class="col-lg-8">
                            <div class="row  no-gutters">
                                <div class="buttons-area First-button active col-lg-4 ">
                                    <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                    <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257@2x.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                    <div class="content-btn">
                                        <button data-ask=".Who-We-Are"> Who-We-Are </button>
                                    </div>
                                </div>
                                <div class="buttons-area Secound-button col-lg-4 ">
                                <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png')?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257@2x.png')?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                    <div class="content-btn">
                                        <button data-ask=".What-We-do"> What-We-do </button>
                                    </div>
                                </div>
                                <div class="buttons-area Thired-button col-lg-4 ">
                                <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257-.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                <img src="<?php echo  get_theme_file_uri('/assets/images/Path 257@2x.png') ?>" alt = " <?php echo get_bloginfo( 'name' )?>" />
                                    <div class="content-btn">
                                        <button data-ask=".Where-we-work"> Where-we-work </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about -->

            <!-- value -->
            <div class="value position-relative container">
                        <div class="value-first-hex">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')  ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                        </div>
                        <div class="value-secound-hex">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')  ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                        </div>
                        <div class="value-thired-hex">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')  ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                        </div>
                        <div class="value-Forth-hex">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')  ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                        </div>

                        <div class="tagline-parent">
                                <div class="hoxgen-header">
                                    <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                    <h3 class="header-color tagline">
                                        Value
                                    </h3>
                                </div>
                            </div>

                    <div class="Value-about-Us row justify-content-center ml-2 mr-2">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/value.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" class="col-lg-8"/>
                    </div>
            </div>
            <!-- value -->
            <!-- services -->
            <div class="services position-relative">
                    <div class="services-first-hex">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png' )?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="services-secound-hex">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" class="services-thired-hex"/>

                    <div class="services-forth-hex">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="services-fiveth-hex">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <img src="<?php echo  get_theme_file_uri('./assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>" class="services-sixth-hex"/>
                        <div class="parent-path">
                            <h2 class="header-color line">
                                services
                                <div class="line-path">
                                <img src="<?php echo  get_theme_file_uri('/assets/images/path.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                </div>
                            </h2>
                        </div>
                            <div class="container cloued-images-services">
                                <div class="spacing-sevices">
                                    <?php
                                    $args = array(
                                        'post_type' => 'services',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'categories',
                                                'field'    => 'slug',
                                                'terms'    => 'main'
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
                                                <div class="row ">
                                                    <div class="col-md-6 offset-sm-0 offset-md-5 mb-5">
                                                        <a href="<?php echo esc_url( get_permalink(get_page_by_title( 'services' )));?>">
                                                            <?php the_post_thumbnail( '', ['class'  => 'w-100 position-relative', 'alt' => get_bloginfo( 'name' )]); ?>
                                                            <h2 class="header-images"> <?php the_title(); ?> </h2>
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php else: //It's odd ?>
                                                <div class="row ">
                                                    <div class="col-md-6 offset-sm-0 offset-md-1 mb-5">
                                                        <a href="<?php echo esc_url( get_permalink(get_page_by_title( 'services')));?>">
                                                            <?php the_post_thumbnail( '', ['class'  => 'w-100 position-relative', 'alt' => get_bloginfo( 'name' )]); ?>
                                                            <h2 class="header-images"> <?php the_title(); ?> </h2>
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php  endif;

                                            endwhile; wp_reset_postdata(); endif;
                                    ?>
                                </div>
                        </div>
                </div>
            <!-- services -->
            <!-- catagroy -->
            <div class="our-catagroy position-relative">
                    <div class="catagroy-first-hex">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div  class="catagroy-secound-hex">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div  class="catagroy-thired-hex">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div  class="catagroy-forth-hex">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div  class="catagroy-fiveth-hex">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="tagline-parent">
                        <div class="hoxgen-header">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                            <h3 class="header-color tagline">
                                Our Catagroy
                            </h3>
                        </div>
                    </div>
                    <div class="grid-trigger-catagroy container animation-scroll">
                        <div class=" row justify-content-center no-gutters max-desktop">
                            <div class="First-trigger col-lg-3 col-md-12">
                                <div class="one">
                                <?php 
                                $imageoneCatagroy = get_field('First Gatagroy');
                                if( !empty( $imageoneCatagroy ) ): ?>
                                    <img src="<?php echo esc_url($imageoneCatagroy['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="position-relative"/>
                                <?php endif; ?>
                                <?php
                                    $terms = get_terms( 'categories' );
                                    foreach ( $terms as $term ) {
                                        if($term->name =="Exhibitions"){
                                            $term_link = get_term_link( $term );
                                            echo '<a href="' . esc_url( $term_link ) . '" class="header-images catagroy-head">' . $term->name . '</a>';
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class=" row justify-content-center section no-gutters max-desktop">
                            <div class="secound-trigger col-lg-3 col-md-12">
                                <div class="one">
                                <?php 
                                $imageoneCatagroySecound = get_field('secound_gatagroy');
                                if( !empty( $imageoneCatagroySecound ) ): ?>
                                    <img src="<?php echo esc_url($imageoneCatagroySecound['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="position-relative"/>
                                <?php endif; ?>
                                <?php
                                    $terms = get_terms( 'categories' );
                                    foreach ( $terms as $term ) {
                                        if($term->name == "Commercial"){
                                            $term_link = get_term_link( $term );
                                            echo '<a href="' . esc_url( $term_link ) . '" class="header-images catagroy-head">' . $term->name . '</a>';
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                            <div class="secound-trigger col-lg-3 col-md-12">
                                <div class="two">
                                <?php 
                                $imageoneCatagroyThired = get_field('thred_gatagroy');
                                if( !empty( $imageoneCatagroyThired ) ): ?>
                                    <img src="<?php echo esc_url($imageoneCatagroyThired['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="position-relative"/>
                                <?php endif; ?>
                                <?php
                                    $terms = get_terms( 'categories' );
                                    foreach ( $terms as $term ) {
                                        if($term->name == "RESIDENTIAL"){
                                            $term_link = get_term_link( $term );
                                            echo '<a href="' . esc_url( $term_link ) . '" class="header-images catagroy-head">' . $term->name . '</a>';
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class=" row justify-content-center section no-gutters max-desktop">
                            <div class="Thired-trigger col-lg-3 col-md-12">
                                <div class="one">
                                <?php 
                                $imageoneCatagroyForth = get_field('forth_gatagroy');
                                if( !empty( $imageoneCatagroyForth ) ): ?>
                                    <img src="<?php echo esc_url($imageoneCatagroyForth['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="position-relative"/>
                                <?php endif; ?>
                                <?php
                                    $terms = get_terms( 'categories' );
                                    foreach ( $terms as $term ) {
                                        if($term->name == "CORPORATES"){
                                            $term_link = get_term_link( $term );
                                            echo '<a href="' . esc_url( $term_link ) . '" class="header-images catagroy-head">' . $term->name . '</a>';
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                            <div class="Thired-trigger col-lg-3 col-md-12">
                                <div class="two">
                                <?php 
                                $imageoneCatagroyFIvfth = get_field('fivfth_gatagroy');
                                if( !empty( $imageoneCatagroyFIvfth ) ): ?>
                                    <img src="<?php echo esc_url($imageoneCatagroyFIvfth['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="position-relative"/>
                                <?php endif; ?>
                                <?php
                                    $terms = get_terms( 'categories' );
                                    foreach ( $terms as $term ) {
                                        if($term->name == "Hospitality"){
                                            $term_link = get_term_link( $term );
                                            echo '<a href="' . esc_url( $term_link ) . '" class="header-images catagroy-head">' . $term->name . '</a>';
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                            <div class="Thired-trigger col-lg-3 col-md-12">
                                <div class="three">
                                <?php 
                                $imageoneCatagroySixth = get_field('sixth_gatagroy');
                                if( !empty( $imageoneCatagroySixth ) ): ?>
                                    <img src="<?php echo esc_url($imageoneCatagroySixth['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="position-relative"/>
                                <?php endif; ?>
                                <?php
                                    $terms = get_terms( 'categories' );
                                    foreach ( $terms as $term ) {
                                        if($term->name == "Landscape"){
                                            $term_link = get_term_link( $term );
                                            echo '<a href="' . esc_url( $term_link ) . '" class="header-images catagroy-head">' . $term->name . '</a>';
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- catagroy -->
            <!-- process -->
            <div class="Our-process position-relative">
                    <div class="process-first-hex">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="tagline-parent">
                        <div class="hoxgen-header">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                            <h3 class="header-color tagline">
                                Our Process
                            </h3>
                        </div>
                    </div>
                    <div class="prcoess container">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <img src="<?php echo  get_theme_file_uri('/assets/images/Group 148.png')?>" class="image-proces"  alt= " <?php echo get_bloginfo( 'name' )?>"/>
                            </div>
                            <div class="py-5 px-5">
                                <p class="px-5"><span><img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 3.png')  ?>" alt= " <?php echo get_bloginfo( 'name' )?>" class="mx-3"></span>Where we learn about your need and desires</p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- process -->
            <!-- partners -->
            <div class="Our-partneer position-relative">
                    <div class="partner-first-hex">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="partner-secound-hex">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="partner-thired-hex">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="tagline-parent">
                        <div class="hoxgen-header">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                            <h3 class="header-color tagline">
                                Our Partner
                            </h3>
                        </div>
                    </div>
                    <div class="container cloued-images-Partner">
                    <?php
                                $args = array( 'post_type' => 'partners', 'posts_per_page' => 3 );
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
            <div class="Clients position-relative">
                    <div class="tagline-parent">
                        <div class="hoxgen-header">
                        <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                            <h3 class="header-color tagline">
                                Our Clients
                            </h3>
                        </div>
                    </div>
                    <div class="container cloued-images-Partner">
                    <?php
                                $args = array( 'post_type' => 'clients', 'posts_per_page' => 3 );
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
            <!-- magitub -->
            <div class="Mediahub position-relative">
                    <div class="Mediahub-first-hex">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')  ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
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
                            <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                            <h3 class="header-color tagline">
                                latest Blogs
                            </h3>
                        </div>
                    </div>
                    <div class="blog-latest-person container">
                    <?php
                        $args = array( 
                            'post_type' => 'Post', 
                            'posts_per_page' => 1,
                        );
                        //Set up a counter
                        //Preparing the Loop
                        $query = new WP_Query( $args );
                        //In while loop counter increments by one $counter++
                        if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="row">
                                <div class="col-lg-3 image-person position-relative spacing-sepecial-blog">
                                    <?php the_post_thumbnail( '', [ 'alt' => get_bloginfo( 'name' )]); ?>
                                    <div class="side-Mediahub-secound-hex">
                                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                        <h2 class="Author"> <?php echo  the_field('author'); ?> </h2>
                                        <h2 class="person-name"> <?php echo  the_field('person'); ?></h2>
                                    </div>
                                </div>
                                <div class="col-lg-9 blog-text max-width-margin">
                                    <div class="cont-p text-justify">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="button d-flex justify-content-end button-normal">
                                        <div class="position-relative content-btn">
                                            <img src="<?php echo  get_theme_file_uri('/assets/images/Path 264.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blogs' ) ) );?>"> More Blogs </a>
                                        </div>
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
                            $args = array( 'post_type' => 'news', 'posts_per_page' => 1 );
                            //Preparing the Loop
                            $query = new WP_Query( $args );
                            //In while loop counter increments by one $counter++
                            if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 image-news position-relative">
                                    <?php the_post_thumbnail( '', [ 'alt' => get_bloginfo( 'name' )]); ?>
                                        <div class="the-title-news">
                                            <h1><?php the_title() ?> </h1>
                                            <span> <?php the_time('F j, Y'); ?></span>
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
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 margin-top-news news-margin">
                                        <div class="content text-justify">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <div>
                                    <div class="button d-flex justify-content-center button-normal">
                                        <div class="position-relative content-btn">
                                            <img src="<?php echo  get_theme_file_uri('/assets/images/Path 264.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'News' ) ) );?>"> More News </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            <?php    endwhile; wp_reset_postdata(); endif; ?>
                    </div>
             </div>
            <!-- news -->
            <!-- work -->
            <div class="Work position-relative">
                    <div class="Work-secound-hex" >
                     <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                     <div class="Work-thired-hex">
                    <img src="<?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                    </div>
                    <div class="tagline-parent">
                            <div class="hoxgen-header">
                            <img src="<?php echo  get_theme_file_uri('/assets/images/hexgon-header.png') ?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                <h3 class="header-color tagline">
                                        Work With Us
                                </h3>
                            </div>
                    </div>
                    <div class="container form-cv">
                        <?php   echo do_shortcode( '[contact-form-7 id="1158" title="contact-form-2"]' ); ?>
                    </div>
                </div>            
            <!-- work -->

            <?php require_once(__DIR__.'/inc/footer.php'); ?>
        </div>
    <!-- home page -->
<!-- footer -->
    <script src="<?php echo  get_theme_file_uri('/assets/js/buttons.js') ?>"></script>
    <script src="<?php echo  get_theme_file_uri('/assets/js/lottie.js') ?>"></script>
    <script src="<?php echo  get_theme_file_uri('/assets/js/animation.js') ?>"></script>
    <script src="<?php echo  get_theme_file_uri('/assets/js/Main-page.js') ?>"></script>
<?php get_footer(); ?>
<!-- footer -->
