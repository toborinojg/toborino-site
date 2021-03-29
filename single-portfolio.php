<?php
/**
 * The single Portfolio post
 * @package Toborino
 */
get_header();
?>
    <!-- Scroll Indicator-->
    <div id="scrollIndicator"></div>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb" style="background:url('<?php echo get_the_post_thumbnail_url(12,'full');?>');background-repeat:no-repeat;background-size: cover;">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>/portfolio">Portfólio</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Details Area-->
    <div class="portfolio-details-area portfolio-content section-padding-90-90">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="section-heading">
              <h2><?php the_title(); ?></h2>
              <p><?php echo get_field('descricao_cliente'); ?></p>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-6">
            <div class="project-meta text-md-right mb-80"><a class="btn saasbox-btn" href="<?php echo get_field('url_site'); ?>" target="_blank"><?php if(get_field('rotulo_botao')){ echo get_field('rotulo_botao'); } else { echo "Veja o site"; } ?></a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="project-meta mb-5">
              <h3>Lançamento:</h3>
              <p class="mb-0"><?php echo get_field('lancamento'); ?></p>
            </div>
			<?php if(get_field('texto_parceiro')){ ?>
            <div class="project-meta mb-5">
              <h3>Cliente:</h3>
              <p class="mb-0"><?php echo get_field('texto_parceiro'); ?></p>
            </div>
			<?php } ?>
			<?php if(get_field('desafio')){ ?>
            <div class="project-details-content mb-5">
              <h5>Desafio:</h5>
              <p class="mb-0"><?php echo get_field('desafio'); ?></p>
            </div>
			<?php } ?>
			<?php if(get_field('entrega')){ ?>
            <div class="project-details-content mb-5">
              <h5>Entrega:</h5>
              <p class="mb-0"><?php echo get_field('entrega'); ?></p>
            </div>
			<?php } ?>
          </div>
          <div class="col-12 col-md-8">
            <div class="project-details-shots mt-5 mt-md-0">
              <div class="row saasbox-portfolio-filter">
			<?php if( have_rows('imagens') ): ?>
				<?php while( have_rows('imagens') ): the_row(); 
					// vars
					$image = get_sub_field('imagem');
				?>
				<!-- Project Image-->
				<div class="col-12 col-lg-6 single-portfolio-item">
				  <div class="project-img mb-30"><a class="image-popup2" href="<?php echo $image['url']; ?>" data-effect="mfp-zoom-in" title="<?php echo get_the_title(); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a></div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php 
	$posts = get_field('relacionados');
	if( $posts ): ?>
    <!-- Related Project-->
    <div class="container">
      <div class="border-top"></div>
    </div>
    <div class="related-project-area section-padding-120">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-7">
            <div class="section-heading mb-4">
              <h2>Projetos relacionados</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="related-project-slide owl-carousel">
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
              <!-- Single Slide-->
              <div class="single-portfolio-area no-boxshadow border mt-3">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url($post->ID,'full');?>" alt="<?php the_title(); ?>"></a>
                <!-- Ovarlay Content-->
                <div class="overlay-content">
                  <div class="portfolio-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                  <div class="portfolio-links"><!-- <a class="image-popup" href="<?php echo get_the_post_thumbnail_url($post->ID,'full');?>" data-effect="mfp-zoom-in" title="<?php the_title(); ?>"><i class="lni-play"></i></a> --><a href="<?php the_permalink(); ?>"><i class="lni-play"></i></a></div>
                </div>
              </div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php endif; ?>
<?php 
include("inc/newsletter.inc.php");
include("inc/cta.inc.php");
get_footer();