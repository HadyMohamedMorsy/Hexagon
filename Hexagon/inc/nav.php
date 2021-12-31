<nav class="navbar navbar-expand-lg  navbar-fixed-top navbar-dark header-Page">
                    <div class="container">
                        <a class="navbar-brand log" href="#">
                            <?php
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    
                                    if ( has_custom_logo() ) {
                                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                    } else {
                                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                                    }
                            ?>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>           
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php nav(); ?>
                        </div>

                        <div class="social-media">
                            <div class="d-flex">
                                <div class="image-icon position-relative">
                                        <img src=" <?php echo get_theme_file_uri('/assets/images/Soical-media.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                    <a href="https://www.facebook.com/Hexagon.designss/">
                                    <div class="Icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                </a>
                                </div>
                                <div class="image-icon position-relative">
                                        <img src=" <?php echo  get_theme_file_uri('/assets/images/Soical-media.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                    <a href="https://instagram.com/hexagon.designs?utm_medium=copy_link">
                                        <div class="Icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="image-icon position-relative">
                                        <img src=" <?php echo get_theme_file_uri('/assets/images/Soical-media.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>"/>
                                    <a href="mailto:hexagon.designs08@gmail.com">
                                        <div class="Icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </nav>