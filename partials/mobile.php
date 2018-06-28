<section class="seventh" style="background: url(<?php echo get_field("m_mobile_background")["sizes"]["large"];?>) center; background-size: cover;">
	<div class="container">
		<div class="phone flex">
			<div class="text">
				<h3><?php the_field("m_mobile_title"); ?></h3>
				<p><?php the_field("m_mobile_content"); ?></p>
				<?php
				if( have_rows('m_advantages_repeater') ):

				 	// loop through the rows of data
				    while ( have_rows('m_advantages_repeater') ) : the_row();
				    	?>
				<p class="advantages"><?php the_sub_field("m_advantage"); ?></p>
				<!-- <p class="advantages two">HIGH QUALITY CODE</p>
				<p class="advantages three">DIFFERENT HEADERS & LAYOUT</p> -->

						<?php
				    endwhile;
				endif;
				?>
				<div class="ios"><style> .seventh .ios::before{background-image: url(<?php echo get_field("m_phone_image")["sizes"]["mobile"];?>)} </style>
				</div>
			</div>
		</div>
	</div>
</section>