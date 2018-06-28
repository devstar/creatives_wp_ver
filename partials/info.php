<section class="sixth">
	<div class="container">
		<div class="short flex">
			
			<?php
			if( have_rows('is_info_repeater') ):

			 	// loop through the rows of data
			    while ( have_rows('is_info_repeater') ) : the_row();
			    	?>
			    	<div class="flex">
						<div><?php the_sub_field('is_info_icon'); ?></div>
						<p><?php the_sub_field('is_info_content'); ?></p>
					</div>
			    	<?php
			    endwhile;
			endif;

			?>
		</div>
	</div>
</section>