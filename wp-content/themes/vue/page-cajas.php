<?php get_header(); ?>

<div class="hero-header imgToBg_element">
	<img class="imgToBg_source" src="<?php echo get_template_directory_uri() ?>/images/hero-header.jpg" alt="">
  <div class="hero-header_content">
    <h1 class="hero-header_title nomargin-bottom" v-cloak>{{ title }}</h1>
  </div>
</div>

<section class="section">
  <div class="container">

  	<p v-cloak v-if="total_items" >Total: {{ total_items }}</p>

    <!-- PRODUCTS -->

    <div v-if="!products" class="loading">
      <svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
            <stop stop-color="#000" stop-opacity="0" offset="0%"/>
            <stop stop-color="#000" stop-opacity=".631" offset="63.146%"/>
            <stop stop-color="#000" offset="100%"/>
          </linearGradient>
        </defs>
        <g fill="none" fill-rule="evenodd">
          <g transform="translate(1 1)">
            <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
              <animateTransform
                attributeName="transform"
                type="rotate"
                from="0 18 18"
                to="360 18 18"
                dur="0.9s"
                repeatCount="indefinite" />
            </path>
            <circle fill="#fff" cx="36" cy="18" r="1">
              <animateTransform
                attributeName="transform"
                type="rotate"
                from="0 18 18"
                to="360 18 18"
                dur="0.9s"
                repeatCount="indefinite" />
            </circle>
          </g>
        </g>
      </svg>
    </div>

    <div v-cloak v-else class="products">
		  <div class="row">
					<div class="col-sm-6 col-md-3" v-for="product in products">
					  <div :id="'product-'+product.id" class="product product--item">
					    <div class="product_figure">
                <a class="product_link-full" :href="product.link"></a>
					      <figure class="product_thumbnail imgToBg_element">
					        <img class="img-responsive" :src="product.thumbnail" alt="">
					      </figure>
					    </div>
					    <div class="product_content">
					      <div class="product_title">{{ product.title.rendered}}</div>
					      <div class="product_left"> 
			            <div class="product_price">{{ product.precio }}</div>
					        <a class="product_link" :href="product.link">+</a>
					      </div>
					    </div>
					  </div>
					</div>
		  </div>
      <div class="text-center">
        <button :disabled="postsLoaded || loading" class="button" @click="loadMore">
          Cargar más
          <img v-if="loading" src="<?php echo get_template_directory_uri() ?>/images/loader.svg" alt="...">
        </button>
      </div>
		</div>

    <!-- END PRODUCTS -->

  </div>
</section>

<?php
get_footer();