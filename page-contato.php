<?php
/**
 * Template name: Contato
 * @package Toborino
 */
get_header();
?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb" style="background:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>');background-repeat:no-repeat;background-size: cover;">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title"><?php the_title(); ?></h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Area-->
    <div class="saasbox-contact-us-area section-padding-120-40">
      <div class="container">                       
        <div class="row justify-content-between">
          <!-- Contact Side Info-->
          <div class="col-12 col-lg-5 col-xl-4">
            <div class="contact-side-info mb-80">
              <h5>E-mail: <a href="mailto:<?php echo get_field("e-mail"); ?>"><?php echo get_field("e-mail"); ?></a></h5>
              <h5>Fone: <?php echo get_field("telefone"); ?></h5>
              <h4 class="my-4"><?php echo get_field("texto"); ?></h4>
              <p class="mb-0"><?php echo get_field("aviso"); ?></p>
            </div>
          </div>
          <!-- Contact Form-->
          <div class="col-12 col-lg-7">
            <div class="contact-form mb-80">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile; // End of the loop.
			?>			
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Google Maps-->
    <div class="google-maps-wrapper">
	  <iframe src="<?php echo get_field("google_maps"); ?>"  allowfullscreen=""></iframe>
    </div>
<script>  
    document.addEventListener( 'wpcf7mailsent', function( event ) {
    document.getElementById('hideform').style.display = 'none';
}, false );
</script>
<?php
get_footer();
