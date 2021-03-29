<?php
/**
 * The template for displaying 404 pages (not found)
 * @package Toborino
 */
get_header();
?>
    <!-- Error Area-->
    <div class="saasbox-error-area section-padding-0-120">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-sm-9 col-md-8 col-lg-6"><img class="mt-5 pt-5" src="<?php echo get_bloginfo( 'template_url' ); ?>/img/404a.png" alt="">
            <h5><?php esc_html_e( 'Oops! Não encontramos a página que você procura.', 'toborino' ); ?></h5>
            <!-- <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'toborino' ); ?></p> -->
			<a class="btn saasbox-btn mt-4" href="<?php bloginfo('url'); ?>">Voltar para a Home</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="border-top"></div>
    </div>
<?php
get_footer();
