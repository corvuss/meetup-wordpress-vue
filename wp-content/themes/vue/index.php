<?php get_header(); ?>

<div class="hero-header imgToBg_element">
	<img class="imgToBg_source" src="<?php echo get_template_directory_uri() ?>/images/hero-header.jpg" alt="">
  <div class="hero-header_content">
    <h1 class="hero-header_title nomargin-bottom">Home</h1>
  </div>
</div>

<section class="section">
  <div class="container">

    <!-- PRODUCTS -->
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
          <div id="post-<?php the_ID() ?>" class="product product--item">
            <div class="product_figure"><a class="product_link-full" href="<?php the_permalink() ?>"></a>
              <figure class="product_thumbnail imgToBg_element">
                <img class="imgToBg_source" src="<?php echo the_post_thumbnail_url() ?>" alt="">
              </figure>
            </div>
            <div class="product_content">
              <div class="product_title"><?php the_title() ?></div>
              <div class="product_left">
                <div class="product_price"><?php echo get_field('precio') ?></div>
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
    <!-- END PRODUCTS -->

  </div>
</section>

<?php
get_footer();
