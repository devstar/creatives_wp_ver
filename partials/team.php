<section class="eighth" id="team">
	<div class="container">
		<div class="team">
			<h2><style> .team h2::before{content: "<?php the_field('t_team_background_letter'); ?>"} </style><?php the_field('t_team_title'); ?></h2>
			<p><?php the_field('t_team_subtitle'); ?></p>
		</div>
		<div class="people flex">
			<?php
			if( have_rows('t_members_repeater') ):

			 	// loop through the rows of data
			    while ( have_rows('t_members_repeater') ) : the_row();
			    	?>
			    	<div>
						<img src="<?php echo get_sub_field('t_member_photo') ["sizes"]["member"]; ?>" alt="<?php echo get_sub_field('t_member_photo') ['alt']; ?>">
						<div class="name">
							<h3><?php the_sub_field('t_member_name'); ?></h3>
							<p><?php the_sub_field('t_member_position'); ?></p>
						</div>
					</div>
			    	<?php
			    endwhile;
			endif;

			?>
		</div>
	</div>
</section>