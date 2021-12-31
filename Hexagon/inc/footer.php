<div class="container footer">
	<div class="row justify-content-between">
		<div class="col-md-2 col-sm-1">
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
	    </div>
		<div class="col-md-10 col-sm-10 text-right">
			<p><span><img src="<?php echo get_theme_file_uri('/assets/images/Group 110.png')?>" alt= " <?php echo get_bloginfo( 'name' )?>" class="hex-header-left-top pb-2"  ></span> All copy rights are reserved by <span>Gallop Media</span></p>
		</div>
	</div>
</div>