<?php
/**
 * The template for displaying all single posts
 * @package Toborino
 */
get_header();
?>
    <!-- Scroll Indicator-->
    <div id="scrollIndicator"></div>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb" style="background:url('<?php echo get_the_post_thumbnail_url(14,'full');?>');background-repeat:no-repeat;background-size: cover;">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Blog</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li> -->
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- saasbox Blog Area-->
    <div class="saasbox--blog--area section-padding-90">
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
			  <?php if($thumbnail){ echo "<div class='mb-5'>". $thumbnail; echo "<span class='caption'>".get_the_post_thumbnail_caption()."</span></div>"; } ?>
              <div class="post-date mb-2"><?php the_date(); ?></div>
              <h2 class="mb-3"><?php the_title(); ?></h2>
              <div class="post-meta mb-5">Por <span class="post-author"><?php the_author(); ?></span></div>
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
                <h4 class="widget-title mb-30">Categorias</h4>
				<?php //wp_list_categories( array('title_li' => '') );
				$terms = get_terms( 'category' );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
					echo '<ul class="catagories-list">';
					foreach ( $terms as $term ) {
						echo '<li><a href="'.get_bloginfo('url').'/' . $term->slug . '"><i class="fa fa-angle-double-right" aria-hidden="true"></i>' . $term->name . '</a></li>';
					}
					echo '</ul>';
				} ?>
                </ul>
              </div>
              <!-- Single Widget Area-->
              <div class="single-widget-area mb-5">
                <h4 class="widget-title mb-30">Posts Recentes</h4>
				<?php echo posts_recentes(); ?>
              </div>
              <!-- Single Widget Area-->
              <div class="single-widget-area">
                <h4 class="widget-title mb-30">Tags</h4>
   				<?php
					$html = '<ul class="popular-tags clearfix">';
					foreach ( $tags as $tag ) {
						$tag_link = get_tag_link( $tag->term_id );
								 
						$html .= "<li><a href='{$tag_link}'>{$tag->name}</a></li>";
					}
					$html .= '</ul>';
					echo $html;
				?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php 
include("inc/newsletter.inc.php");
include("inc/cta.inc.php");
get_footer();