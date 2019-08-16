<?php get_header(); ?>

<div class="hero-header imgToBg_element">
	<img class="imgToBg_source" src="<?php echo get_template_directory_uri() ?>/images/hero-header.jpg" alt="">
  <div class="hero-header_content">
    <h1 class="hero-header_title nomargin-bottom">{{ title }}</h1>
  </div>
</div>

<section class="section">
  <div class="container">

  	<p>Total: 100</p>

    <!-- PRODUCTS -->

    <div class="products">
		  <div class="row">
					<div class="col-sm-6 col-md-3" v-for="product in products">
					  <div class="product product--item">
					    <div class="product_figure">
                <a class="product_link-full"></a>
					      <figure class="product_thumbnail imgToBg_element">
					        <img class="img-responsive" alt="" :src="product.thumbnail">
					      </figure>
					    </div>
					    <div class="product_content">
					      <div class="product_title">{{ product.title.rendered }}</div>
					      <div class="product_left"> 
			            <div class="product_price">{{ product.precio }}</div>
					        <a class="product_link" :href="product.link">+</a>
					      </div>
					    </div>
					  </div>
					</div>
		  </div>
      <div class="text-center">
        <button class="button" @click="loadMore">
          Cargar más
          <img src="<?php echo get_template_directory_uri() ?>/images/loader.svg" alt="...">
        </button>
      </div>
		</div>

    <!-- END PRODUCTS -->

  </div>
</section>

<?php
get_footer();