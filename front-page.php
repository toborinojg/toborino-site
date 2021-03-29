<?php
/**
 * The front page template.
 * @package Toborino
 */
get_header();
?>
    <!-- Welcome Area-->
    <section class="welcome-area" id="home">
      <!-- Background Shape-->
      <div class="background-shape">
        <div class="circle1 wow fadeInRightBig" data-wow-duration="4000ms"></div>
        <div class="circle2 wow fadeInRightBig" data-wow-duration="4000ms"></div>
        <div class="circle3 wow fadeInRightBig" data-wow-duration="4000ms"></div>
        <div class="circle4 wow fadeInRightBig" data-wow-duration="4000ms"></div>
      </div>
      <!-- Background Animation-->
      <div class="background-animation">
        <div class="star-ani"></div>
        <div class="cloud-ani"></div>
        <div class="triangle-ani"></div>
        <div class="circle-ani"></div>
        <div class="box-ani"></div>
      </div>
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-between">
          <!-- Welcome Content-->
          <div class="col-12 col-md-6">
            <div class="welcome-content">
              <h2 class="mb-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms"><?php echo get_field("frase_hero"); ?></h2>
			  <div class="animated--headline">
                <h4 class="ah-headline wow fadeInUp" data-wow-duration="1000ms"><span><?php echo get_field("frase_2_hero"); ?></span> 
				<span class="ah-words-wrapper">
				<?php if( have_rows('palavras') ): $p=0;?>
					<?php while( have_rows('palavras') ): the_row(); ?>
					<b <?php if($p==0){ echo 'class="is-visible"'; } ?>><?php echo get_sub_field('palavra'); ?></b>
					<?php $p++; endwhile; ?>
				<?php endif; ?>
				</span></h4>
              </div>
			  <a class="btn saasbox-btn white-btn mt-3 wow fadeInUp" href="<?php echo get_field("link_hero"); ?>" data-wow-duration="1000ms" data-wow-delay="400ms"><?php echo get_field("label_hero"); ?></a>
            </div>
          </div>
          <!-- Welcome Thumb-->
          <div class="col-10 col-md-6">
			<?php 
			$image = get_field('imagem_hero');
			if( !empty( $image ) ): ?>
				<div class="welcome-thumb hero1 wow fadeInUp" data-wow-delay="300ms"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
			<?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- About Area-->
    <section class="about-area section-padding-120" id="fazemos">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <!-- About Content Area-->
          <div class="col-12 col-lg-7 col-xl-6">
            <div class="about-content mb-100 mb-lg-0">
              <div class="row justify-content-between">
				<?php if( have_rows('itens_fazemos') ): ?>
					<?php while( have_rows('itens_fazemos') ): the_row(); 
						// vars
						$icone = get_sub_field('icone');
						$titulo = get_sub_field('titulo');
						$subtitulo = get_sub_field('sub-titulo');
					?>
					<!-- Single About Area-->
					<div class="col-12 col-sm-6">
					  <div class="single-about-area wow fadeInUp" data-wow-duration="800ms" data-wow-delay="100ms">
						<div class="icon"><i class="lni-<?php echo $icone; ?>"></i></div>
						<h4><?php echo $titulo; ?></h4>
						<p><?php echo $subtitulo; ?></p>
					  </div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
              </div>
            </div>
          </div>
          <!-- About Text Area-->
          <div class="col-12 col-lg-5">
            <div class="section-heading mb-0">
              <h6 class="wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><?php echo get_field("sub-titulo_fazemos"); ?></h6>
              <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><?php echo get_field("titulo_fazemos"); ?></h2>
              <p class="mb-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms"><?php echo get_field("texto_fazemos"); ?></p>
			  <a class="btn saasbox-btn mb-4 wow fadeInUp" href="<?php echo get_bloginfo("url"); ?>/contato" data-wow-delay="400ms" data-wow-duration="1000ms">Fale conosco</a>
			  <p class="mb-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
				<?php
				$image = get_field('imagem_fazemos');
				if( !empty( $image ) ): ?>
					<div class="welcome-thumb hero1 wow fadeInUp" data-wow-delay="300ms"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
				<?php endif; ?>
			  </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="border-top"></div>
    </div>
    <!-- Cool Facts Area-->
    <section class="saasbox-cool-facts-area section-padding-120-70">
      <!-- Circle Animation-->
      <div class="circle-animation">
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        <div class="circle4"></div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="section-heading text-center">
              <h2><?php echo get_field("frase_real"); ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
		<?php if( have_rows('numeros_real') ): ?>
			<?php while( have_rows('numeros_real') ): the_row(); ?>
          <!-- Single Cool Facts Area-->
          <div class="col-12 col-sm-4">
            <div class="single-cool-fact mb-50 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="<?php echo get_sub_field("time"); ?>ms">
              <h2>+ <span class="rs-counter"><?php echo get_sub_field("numero"); ?></span></h2>
              <p><?php echo get_sub_field("titulo"); ?></p>
            </div>
          </div>
			<?php endwhile; ?>
		<?php endif; ?>
      </div>
    </section>
    <div class="container">
      <div class="border-top"></div>
    </div>
   <!-- Solucoes Area-->
    <section class="saasbox-features-area section-padding-90-90">
      <!-- Background Shape-->
      <div class="background-shape wow fadeInLeftBig" data-wow-duration="4000ms"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-9 col-lg-7">
            <div class="section-heading text-center white">
              <h2><?php echo get_field("titulo_sol"); ?></h2>
              <p><?php echo get_field("sub_titulo_sol"); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-8">
            <div class="row">
			<?php if( have_rows('lista_sol') ): ?>
				<?php while( have_rows('lista_sol') ): the_row(); ?>
              <!-- Single Feature Area-->
              <div class="col-12 col-md-6">
                <div class="card feature-card mb-30 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                  <div class="card-body d-flex align-items-center"><i class="lni-<?php echo get_sub_field("icone"); ?>"></i>
                    <div class="fea-text">
                      <h6><?php echo get_sub_field("titulo"); ?></h6><span><?php echo get_sub_field("sub_titulo"); ?></span>
                    </div>
                  </div>
                </div>
              </div>
				<?php endwhile; ?>
			<?php endif; ?>
            </div>
          </div>
          <div class="col-12 col-md-10 col-lg-4">
            <!-- Video Card Area-->
            <div class="card video-card mb-30 border-0 mt-5 mt-lg-0">
			<?php
				$image_sol = get_field('thumb_video');
				if( !empty( $image_sol ) ): ?>
              <div class="card-body p-0"><img src="<?php echo esc_url($image_sol['url']); ?>" alt="<?php echo esc_attr($image_sol['alt']); ?>" /><a class="video-play-btn" href="<?php echo get_field("video_sol"); ?>"><i class="lni-play"></i><span class="video-sonar"></span></a></div>
			<?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Area-->
    <section class="saasbox-portfolio-area section-padding-120-40" id="portfolio">
      <div class="container">
        <div class="row align-items-end justify-content-between">
          <div class="col-12 col-md-8 col-lg-7">
            <div class="section-heading mb-0">
              <h2><?php echo get_field("titulo_folio"); ?></h2>
              <p><?php echo get_field("sub_titulo_folio"); ?></p>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-5">
            <div class="portfolio-btn pb-3 text-md-right mt-5 mt-md-0"><a class="btn saasbox-btn" href="<?php echo get_bloginfo('url'); ?>/portfolio">Veja nosso portfólio</a></div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="portfolio-slides owl-carousel">
		<?php 
		$posts = get_field('projetos_folio');
		if( $posts ): ?>
		<?php foreach( $posts as $post): ?>
			<?php setup_postdata($post); ?>
          <!-- Single Portfolio Area-->
          <div class="single-portfolio-area mx-3 mt-70 mb-80"><img src="<?php echo get_the_post_thumbnail_url($post->ID,'large');?>" alt="<?php the_title(); ?>">
            <!-- Overlay Content-->
            <div class="overlay-content">
              <div class="portfolio-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <div class="portfolio-links"><!-- <a class="image-popup" href="<?php echo get_the_post_thumbnail_url($post->ID,'full');?>" data-effect="mfp-zoom-in" title="<?php the_title(); ?>"><i class="lni-play"></i></a> --><a href="<?php the_permalink(); ?>"><i class="lni-play"></i></a></div>
            </div>
          </div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="border-top"></div>
    </div>
    <!-- Partner Area-->
    <div class="our-partner-area section-padding-120" id="parceiros">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-lg-7">
            <div class="section-heading text-center">
              <h2>Parceiros</h2>
            </div>
          </div>
        </div>
      </div>
	  <?php 
	  $myparcas = get_field('parceiros_home');
	  if ( $myparcas ) {
	  ?>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="our-partner-slides owl-carousel">
			<?php
			foreach ( $myparcas as $post ) : 
				setup_postdata( $post );
				if(get_the_post_thumbnail_url($post->ID,'medium')){
				?>
				  <div class="single-partner"><a href="<?php echo get_field('url'); ?>" target="_blank"><img src="<?php echo get_the_post_thumbnail_url($post->ID,'medium');?>" alt="<?php the_title(); ?>"></a></div>
				<?php
				}
				endforeach;
				wp_reset_postdata();
			?>			  
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php
	}
	?>
    <div class="container">
      <div class="border-top"></div>
    </div>
    <!-- News Area -->
    <section class="saasbox-news-area section-padding-120" id="blog">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-lg-7">
            <div class="section-heading text-center">
              <h2><?php echo get_field("titulo_blog"); ?></h2>
              <p><?php echo get_field("sub_titulo_blog"); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
		<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'post_status' => 'publish',
				'orderby'   => 'date',
				'order'     => 'DESC',
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) :
				$loop->the_post();
		  ?>
		
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
			<?php if(get_the_post_thumbnail_url($post->ID,'medium')){ ?>
			  <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>" alt="<?php the_title(); ?>"></a>
			<?php } ?>
              <div class="post-content p-4"><a class="d-block text-muted mb-2" href="<?php the_permalink(); ?>"><?php the_date(); ?></a>
				<a class="post-title d-block mb-2" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                  <p><?php the_excerpt(); ?></p>
                <div class="post-meta d-flex align-items-center justify-content-between"><a class="post-author" href="<?php the_permalink(); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></a><span class="text-muted"><?php echo do_shortcode('[rt_reading_time postfix="minutos" postfix_singular="minuto"]'); ?></span></div>
              </div>
            </div>
          </div>
		  <?php
			endwhile;			
			wp_reset_postdata();
		  ?>
        </div>
        <div class="row">
          <div class="col-12 text-center"><a class="btn saasbox-btn" href="<?php echo get_bloginfo('url'); ?>/blog">Ver todos os posts</a></div>
        </div>
      </div>
    </section>
    <!-- Cookie Alert Area
    <div class="cookiealert mb-0" role="alert">
      <p>This site uses cookies. We use cookies to ensure you get the best experience on our website. For details, please check our <a href="#" target="_blank"> Privacy Policy.</a></p>
      <button class="btn btn-primary acceptcookies" type="button" aria-label="Close">I agree</button>
    </div>-->
<?php 
include("inc/newsletter.inc.php");
include("inc/cta.inc.php");
get_footer();