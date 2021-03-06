<?php
/**
 * The main template file
 * @package Toborino
 */
get_header();
?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb" style="background:url('<?php echo get_the_post_thumbnail_url(14,'full');?>');background-repeat:no-repeat;background-size: cover;">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Blog</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- saasbox Blog Area-->
    <div class="saasbox--blog--area blog-card-page section-padding-90">
      <div class="container">
        <div class="row">
		<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby'   => 'date',
				'order'     => 'DESC',
				'paged'     => $paged
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) :
				$loop->the_post();
			?>
          <!-- Single Blog Post-->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card blog-card mb-5"><a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($post->ID,'full');?>" alt=""></a>
              <div class="post-content p-4"><a class="d-block text-muted mb-2" href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a><a class="post-title d-block mb-2" href="<?php the_permalink(); ?>">
                  <h4><?php the_title(); ?></h4></a>
                  <p><?php the_excerpt(); ?></p>
                <div class="post-meta d-flex align-items-center justify-content-between"><a class="post-author" href="<?php the_permalink(); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></a><span class="text-muted"><?php echo do_shortcode('[rt_reading_time postfix="minutos" postfix_singular="minuto"]'); ?></span></div>
              </div>
            </div>
          </div>
          <!-- /Single Blog Post-->
		<?php
			endwhile;			
		?>
        </div>
        <!-- Pagination Area-->
        <div class="saasbox-pagination-area mt-4">
          <nav aria-label="Pagina????o">
			<?php paginate_link_function(); ?>
          </nav>
        </div>
      </div>
    </div>
<?php 
include("inc/newsletter.inc.php");
include("inc/cta.inc.php");
get_footer();