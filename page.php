<?php
/**
 * The template for displaying all pages
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
        <div class="row justify-content-center justify-content-between">           
          <div class="col-12 col-md-7 mb-5 mb-md-0">
			<?php if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					$thumbnail = get_the_post_thumbnail($post_id, 'full', array( 'class' => 'post-thumbnail' ));
			?>			
            <!-- Blog Details Area-->
            <div class="single-blog-details-area">
              <?php the_content(); ?>
            </div>
            <!-- Post Tag & Share Button-->
            <div class="post-tag-share-button d-sm-flex align-items-center justify-content-between my-5">
              <div class="post-tag pb-5">
				<?php the_tags( '<h5 class="mb-3">Tags desse post</h5><ul class="d-flex align-items-center"><li>', '</li><li>', '</li></ul>' ); ?>
              </div>
            </div>
			<?php
				$tags = get_the_tags();
				endwhile;
			endif;
		    wp_reset_postdata();
			?>
          </div>
          <div class="col-12 col-md-5 col-lg-4">
            <div class="blog-sidebar-area">
              <!-- Single Widget Area-->
              <div class="single-widget-area mb-5">
                <!-- Search Form-->
				<form role="search" method="get" id="searchformh" class="widget-form" action="<?php echo get_bloginfo('url'); ?>">
                  <input class="form-control" name="s" type="search" placeholder="Procure aqui ...">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
              <!-- Single Widget Area-->
              <div class="single-widget-area mb-5">
                <h4 class="widget-title mb-30">Posts Recentes</h4>
				<?php echo posts_recentes(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
get_footer();
