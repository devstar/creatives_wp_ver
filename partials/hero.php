<section class="first" id="home" style="background: url(<?php echo get_field("hs_hero_background")["sizes"]["large"];?>) center; background-size: cover;">
	<?php
	get_template_part('partials/menu');
	?>
	<div class="content">
		<div class="container flex">
			<h1 class="companyname"><?php the_field('hs_hero_title'); ?></h1>
			<p><?php _e("Scroll Down"); ?></p>
			<a href="#features"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		</div>
	</div>	
</section>