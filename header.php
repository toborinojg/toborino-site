<?php
/**
 * The header for our theme
 * @package Toborino
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?php echo get_bloginfo( 'template_url' ); ?>/img/core-img/favicon.ico">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_url' ); ?>/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="/wp-content/uploads/2020/06/favicon.ico">
	<?php wp_head(); ?>
        <meta property="og:image" content="https://toborino.com/wp-content/uploads/2020/07/toborino_500.png" /><meta property="og:image:secure_url" content="https://toborino.com/wp-content/uploads/2020/07/toborino_500.png" />
		<meta name="author" content="<?php the_author(); ?>">
		<meta name="date" content="<?php the_date(); ?>">
	<!-- Clarity tracking code for https://toborino.com/ -->
	<script>
		(function(c,l,a,r,i,t,y){
			c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
			t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
			y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
		})(window, document, "clarity", "script", "56gtsachfc");
	</script>
  </head>
  <body id="top">
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-light" role="status"><span class="sr-only">Carregando...</span></div>
    </div>
    <!-- Header Area-->
    <header class="header-area<?php if(!is_front_page()){ echo " header2 sticky2"; } ?>">
      <div class="container">
        <div class="classy-nav-container breakpoint-off">
          <nav class="classy-navbar justify-content-between" id="saasboxNav">
            <!-- Logo-->
			<a class="nav-brand mr-5" href="<?php bloginfo('url'); ?>">
				<?php if(is_front_page()){ ?>
				<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/core-img/logo-white_tbr.png" alt="<?php bloginfo('name'); ?>">
				<?php } else { ?>
				<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/core-img/logo_tbr.png" alt="<?php bloginfo('name'); ?>">
				<?php } ?>
			</a>
            <!-- Navbar Toggler-->
            <div class="classy-navbar-toggler"><span class="navbarToggler"><span></span><span></span><span></span><span></span></span></div>
            <!-- Menu-->
            <div class="classy-menu">
              <!-- close btn-->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Nav Start-->
              <div class="classynav">
                <ul id="corenav">
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
                </ul>
                <!-- Contact Button-->
                <div class="login-btn-area ml-4 mt-4 mt-lg-0"><a class="btn saasbox-btn btn-sm" href="<?php bloginfo('url'); ?>/contato">Contato</a></div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>

