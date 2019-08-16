<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vue
 */

?>

	</main>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
          	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">WP Vue</a></p>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/products.js"></script>

</body>
</html>
