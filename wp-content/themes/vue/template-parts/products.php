<div class="products">
  <div class="row">
		<?php
		
		query_posts(array(
			'posts_per_page' => -1,
			'post_type' => 'producto',
			'order' => 'DESC',

		) );
		while (have_posts()) : the_post(); ?>
			<div class="col-sm-6 col-md-3">
			  <div id="post-<?php the_ID(); ?>" class="product product--item">
			    <div class="product_figure"><a class="product_link-full" href="<?php the_permalink() ?>"></a>
			      <figure class="product_thumbnail imgToBg_element">
			        <img class="imgToBg_source" src="<?php echo the_post_thumbnail_url() ?>" alt="">
			      </figure>
			    </div>
			    <div class="product_content">
			      <div class="product_title"><?php the_title() ?></div>
			      <div class="product_left">
			         <?php if( get_field('precio') ): ?>
			            <div class="product_price"><?php echo get_field('precio') ?></div>
			        <?php endif; ?>

			        <a class="product_link" href="<?php the_permalink() ?>">+</a>
			      </div>
			    </div>
			  </div>
			</div>
		<?php
		endwhile;
		wp_reset_query(); ?>
  </div>
</div>