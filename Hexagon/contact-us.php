<?php /* Template Name: contact */ ?>
<?php get_header(); ?>
<div class="home-page overhidden">
<?php require_once(__DIR__.'/inc/nav.php'); ?>
<div class="content-animation">
        <div id="anim">
        </div>
    </div>
            <div class="contact position-relative">
                <div  class="contact-first-hex">
                <img src=" <?php echo  get_theme_file_uri('/assets/images/Polygon 31@2x.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                </div>
                <div class="tagline-parent">
                        <div class="parent-path">
                            <h2 class="header-color line">
                                Contact Us
                                <div class="line-path">
                                <img src=" <?php echo  get_theme_file_uri('/assets/images/path.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                </div>
                            </h2>
                        </div>
                    </div>
                <div class="Image-map-parent container">
                    <div class="row">
                        <div class="col-lg-7 image-map  more-padding-content">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d220978.8342011212!2d31.235780454662223!3d30.071430639647133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d30.0872794!2d31.228295199999998!4m3!3m2!1d30.035160899999997!2d30.968098599999998!5e0!3m2!1sar!2seg!4v1640707751703!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-lg-5 form-text more-padding-content">
                            <div>
                                <h2 class="header-color ">Request Form </h2>
                                <?php   echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
                            </div>
                        </div>
                    </div>
                    <!-- contact icons -->
                    <div class="contact-icons">
                        <p class="links-social-media"><a href="tel:<?php echo  the_field('telephone'); ?>"><span><img src=" <?php echo  get_theme_file_uri('/assets/images/Group 229.png')?>"  alt= " <?php echo get_bloginfo( 'name' )?>" class="mx-2"> </span> <?php echo  the_field('telephone'); ?> </a></p>
                        <p class="links-social-media"><a href="mailto:<?php echo  the_field('email'); ?>"><span><img src=" <?php echo  get_theme_file_uri('/assets/images/Group 232.png')?>"  alt= " <?php echo get_bloginfo( 'name' )?>" class="mx-2"> </span><?php echo  the_field('email'); ?></a></p>
                        <p class="links-social-media"><a href="<?php echo  the_field('address'); ?>"><span><img src=" <?php echo  get_theme_file_uri('/assets/images/Group 230.png')?>"  alt= " <?php echo get_bloginfo( 'name' )?>" class="mx-2"> </span> <?php echo  the_field('address'); ?></a></p>
                        <p class="links-social-media">
                            <a href="<?php echo  the_field('facebook'); ?>"><img src=" <?php echo  get_theme_file_uri('/assets/images/Group 219.png')?>"/> </a>
                            <a href="<?php echo  the_field('instegram'); ?>"><img src=" <?php echo  get_theme_file_uri('/assets/images/Group 221.png')?>"/> </a>
                            <a href="<?php echo  the_field('linkin'); ?>"><img src=" <?php echo  get_theme_file_uri('/assets/images/Group 224.png')?>"/> </a>
                            <a href="<?php echo  the_field('pen'); ?>"><img src=" <?php echo  get_theme_file_uri('/assets/images/Group 225.png')?>"/> </a>
                            <a href="<?php echo  the_field('mus'); ?>"><img src=" <?php echo  get_theme_file_uri('/assets/images/Group 226.png')?>"/> </a>
                            <a href="<?php echo  the_field('youtupe'); ?>"><img src=" <?php echo  get_theme_file_uri('/assets/images/Group 227.png')?>"/> </a>
                        </p>
                    </div>
                </div>
            </div>
            <?php require_once(__DIR__.'/inc/footer.php'); ?>
        </div>

<script src="<?php echo  get_theme_file_uri('/assets/js/lottie.js') ?>"></script>
<script src="<?php echo  get_theme_file_uri('/assets/js/animation.js') ?>"></script>
<?php get_footer(); ?>