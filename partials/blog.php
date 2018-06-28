<section class="fifth" id="strengths">
	<div class="container">
		<div class="blog">
			<h2><style> .blog h2::before{content: "<?php the_field('bs_background_letter'); ?>"} </style><?php the_field('bs_section_title'); ?></h2>
			<p><?php the_field('bs_section_subtitle'); ?></p>
		</div>
		<div class="campaign flex" class="col-sm-6">
			
			<?php
			if( have_rows('bs_blogs_repeater') ):

			 	// loop through the rows of data
			    while ( have_rows('bs_blogs_repeater') ) : the_row();
			    	?>
			    	<div>
						<img src="<?php echo get_sub_field('bs_blog_image') ['sizes']['aboutus']; ?>" alt="<?php echo get_sub_field('bs_blog_image') ['alt']; ?>" />
						<h2><?php the_sub_field('bs_blog_title'); ?></h2>
						<p><?php the_sub_field('bs_blog_content'); ?></p>
					</div>
			    	<?php
			    endwhile;
			endif;

			?>					
		</div>
	</div>
</section>