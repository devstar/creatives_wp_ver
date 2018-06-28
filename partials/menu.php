<header class="header">
	<div class="container flex">
		<a href="<?php echo site_url(); ?>" class="logo"><img src="<?php echo get_field('l_logo_image','option') ["url"]; ?>" alt="<?php bloginfo('name'); ?>"></a>
		<h1>CREATIVES</h1>
		<nav class="nav flex">
			<ul class="menu">
			<!--<li><a href="#home">Home</a></li>
				<li><a href="#features">Features</a></li>
				<li><a href="#news">News</a></li>
				<li><a href="#blog">Blog</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#contactUs">Contact Us</a></li> -->
				<?php
	      		$args = [
	      			'menu_class'=>'menu',
	      			'container'=>false,
	      			'theme_location'=>'primary-navigation'
	      		];
	      		wp_nav_menu( $args );
	      		?>
			</ul>
			<div class="burger"><i class="fa fa-bars"></i></div>
			<ul class="social">
				<?php
				// check if the repeater field has rows of data
				if( have_rows('social_menu_repeater', 'option') ):
				 	// loop through the rows of data
				    while ( have_rows('social_menu_repeater', 'option') ) : the_row();
				    	$link=get_sub_field('sm_link');
				    	?>
				    	<li><a href="<?php echo $link["url"]; ?>" target='<?php echo $link['target']; ?>'><?php the_sub_field('sm_link_icon'); ?></a></li>
				    	<?php
				    endwhile;
				endif;
				?>
			</ul>
		</nav>
	</div>
</header>