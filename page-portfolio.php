<?php
/**
 * Template name: Portfolio
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
    <!-- Portfolio Area-->
    <div class="saasbox-portfolio-area creative-porfolio-line section-padding-90">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="portfolio-menu text-center mb-80">
              <button class="btn portfolio-btn active" type="button" data-filter="*">Todos</button>
              <button class="btn portfolio-btn" type="button" data-filter=".website">Websites</button>
              <button class="btn portfolio-btn" type="button" data-filter=".video">WebTV</button>
              <button class="btn portfolio-btn" type="button" data-filter=".design">Design</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid creative-porfolio-area">
        <div class="row saasbox-portfolio-filter mx-0">
		<?php
		global $post;
	 
		$myposts = get_posts( array(
			'posts_per_page' => -1,
			'post_type'      => "portfolio",
		) );
	 
		if ( $myposts ) {
			foreach ( $myposts as $post ) : 
				setup_postdata( $post ); 
			$post_categories = wp_get_post_categories( $post->ID );
			$cats = array();
				 
			foreach($post_categories as $c){
				$cat = get_category( $c );
				$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
			}
		  ?>
          <!-- Single Portfolio Area-->
          <div class="col-12 col-md-6 col-lg-4 single-portfolio-item <?php echo $cats[0]["slug"]?> <?php echo $cats[1]["slug"]?>">
            <div class="single-portfolio-area card-creative-portfolio mb-50">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url($post->ID,'full');?>" alt="<?php the_title(); ?>"></a>
              <!-- Ovarlay Content-->
              <div class="overlay-content">
                <div class="portfolio-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="portfolio-links"><!-- <a class="image-popup" href="<?php echo get_the_post_thumbnail_url($post->ID,'full');?>" data-effect="mfp-zoom-in" title="<?php the_title(); ?>"><i class="lni-play"></i></a> --><a href="<?php the_permalink(); ?>"><i class="lni-play"></i></a></div>
              </div>
            </div>
          </div>
		<?php
			endforeach;
			wp_reset_postdata();
		}
		?>
        </div>
		<!--
        <div class="row">
          <div class="col-12">
            <div class="load-more-btn text-center mt-5"><a class="btn saasbox-btn white-btn" href="#">Mais</a></div>
          </div>
        </div>
		-->
      </div>
    </div>
<?php 
include("inc/newsletter.inc.php");
include("inc/cta.inc.php");
get_footer();