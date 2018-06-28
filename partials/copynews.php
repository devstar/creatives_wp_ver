<section class="third" id="news">
	<div class="container">
		<div class="black flex">
			<div class="text">
				<p class="date"><?php echo get_the_date('M j, Y'); ?> | <?php echo get_the_category_list(); ?></p>
				<h3><?php the_title(); ?></h3>
				<p><?php the_excerpt(); ?></p>
			</div>
			<div><style> .third .pic::before{content: "<?php the_post_thumbnail('news', ['class'=>'pic']); ?>"} </style>
			</div>
					
				
			
			<!-- <div class="text">
				<p class="date">Jan 4, 2016 | In Culture</p>
				<h3>AKITA INU DOG</h3>
				<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				<p>Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="pic"> -->
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
			</div>
		</div>
	</div>
</section>