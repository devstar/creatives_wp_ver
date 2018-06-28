			<?php
			$categories = get_field('n_categories');
			// print_r($categories);exit;
			$args = array(
				'post_type' => 'post',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'id',
						'terms'    => $categories,
					),
				),
				'posts_per_page'=> get_field('n_news_limit')
			);
			$query = new WP_Query( $args );
			// print_r($query);exit;

			if($query->have_posts()):
				$i=0;
				while($query->have_posts()):
					$query->the_post();

					if($i%2===0){ ?>
						<section class="third" id="news">
							<div class="container">
								<div class="black flex">
									<div class="text">
										<p class="date"><?php echo get_the_date('M j, Y'); ?> | Success Story</p>
										<h3><?php the_title(); ?></h3>
										<p><?php the_excerpt(); ?></p>
									</div>
									<div class="pic"><style> .third .pic::before{background-image: url('<?php echo the_post_thumbnail_url("news");?>')} </style>
									</div>
								</div>
							</div>
						</section>
					<?php }else{ ?>
						<section class="fourth">
							<div class="container">
								<div class="white flex">
									<div class="pic"><style> .fourth .pic::before{background-image: url('<?php echo the_post_thumbnail_url("news");?>')} </style>
									</div>
									<div class="text">
										<p class="date"><?php echo get_the_date('M j, Y'); ?> | Success Story</p>
										<h3><?php the_title(); ?></h3>
										<p><?php the_excerpt(); ?></p>
									</div>
								</div>
							</div>
						</section>
					<?php
					}
					?>
					<?php
					$i++;
				endwhile;
			endif;
			wp_reset_postdata();
			?>
	<!-- 		<div class="text">
				<p class="date">Jan 4, 2016 | In Culture</p>
				<h3>AKITA INU DOG</h3>
				<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				<p>Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="pic">
			</div>
		</div>
	</div>
</section>
<section class="fourth">
	<div class="container">
		<div class="white flex">
			<div class="pic">
			</div>
			<div class="text">
				<p class="date">Jan 4, 2016 | In Culture</p>
				<h3>AKITA INU DOG</h3>
				<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				<p>Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div> -->
	