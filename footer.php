<?php
/**
 * The template for displaying the footer
 * @package Toborino
 */
?>
    <!-- Footer Area-->
    <footer class="footer-area" style="background:#333;padding:40px 0;">
      <div class="container">
        <div class="row justify-content-between">
          <!-- Footer Widget Area-->
          <div class="col-12 col-md-6">
            <div class="footer-widget-area mb-30">
			  <a class="d-block mb-4" href="<?php bloginfo('url'); ?>">
				<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/core-img/logo-white_tbr.png" alt="<?php bloginfo('name'); ?>">
			  </a>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <!-- Footer Nav-->
            <div class="footer-nav" style="padding-top:1rem;">
              <ul class="d-flex">
				  <?php if(is_front_page()){ ?>
				  <?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
							'container' 	 => false, 
							'items_wrap' 	 => '%3$s',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) );
				  ?>
				  <?php } else { ?>
				  <?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
							'container' 	 => false, 
							'items_wrap' 	 => '%3$s',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) );
				  ?>
				  <?php } ?>
				  <li><a href="<?php bloginfo('url'); ?>/contato">Contato</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- All JavaScript Files-->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Poppins:100,400,500,600,700&display=swap" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,400,500,600,700&display=swap" media="print" onload="this.media='all'" />
	<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,400,500,600,700&display=swap" /></noscript>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/default/classy-nav.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/waypoints.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/default/jquery.scrollup.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/default/isotope.pkgd.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/jquery.animatedheadline.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/wow.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_url' ); ?>/js/default/active.js"></script>
	<?php wp_footer(); ?>
  </body>
</html>
