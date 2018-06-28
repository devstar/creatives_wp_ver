<section class="second" id="features">
	<div class="container">
		<div class="awesome">
			<h2><style> .awesome h2::before{content: "<?php the_field('hf_background_letter'); ?>"} </style><?php the_field('hf_section_title'); ?></h2>
		</div>
		<div class="features flex">
			
			<?php
			if( have_rows('hf_features_repeater') ):

			 	// loop through the rows of data
			    while ( have_rows('hf_features_repeater') ) : the_row();
			    	?>
			    	<div>
						<div><?php the_sub_field('hf_feature_icon'); ?></div>
						<h2><?php the_sub_field('hf_feature_title'); ?></h2>
						<p><?php the_sub_field('hf_feature_content'); ?></p>
					</div>
			    	<?php
			    endwhile;
			endif;

			?>					
		</div>
	</div>
</section>