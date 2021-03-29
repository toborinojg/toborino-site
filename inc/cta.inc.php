    <!-- Cool Facts Area-->
    <section class="cta-area cta3 py-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-sm-8">
            <div class="cta-text mb-4 mb-sm-0">
              <h4 class="text-white mb-0"><?php echo get_field("texto_cta",'option'); ?></h4>
            </div>
          </div>
          <div class="col-12 col-sm-4 text-sm-right"><a class="btn saasbox-btn white-btn" href="<?php echo get_field("url_cta",'option'); ?>"><?php echo get_field("texto_botao_cta",'option'); ?></a></div>
        </div>
      </div>
    </section>
