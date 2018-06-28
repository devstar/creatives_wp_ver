<section class="ninth" id="contactUs" style="background: url(<?php echo get_field("cu_contact_background")["sizes"]["large"];?>) center; background-size: cover;">
	<div class="container">
		<div class="project">
			<h2><style> .project h2::before{content: "<?php the_field('cu_contact_background_letter'); ?>"} </style><?php the_field('cu_contact_title'); ?></h2>
		</div>
		<div class="form">
			<div>
				<?php echo do_shortcode(get_field('cu_contact_form_shortcode')); ?>
			</div>	
		</div>
	</div>
</section>