 <section class="ftco-section testimony-section">
    	<img src="images/blob-shape-2.svg" class="svg-blob" alt="Colorlib Free Template">
    	<img src="images/blob-shape-2.svg" class="svg-blob-2" alt="Colorlib Free Template">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white">
          	<span class="subheading">Lee nuestros testimonios</span>
            <h2 class="mb-4">Nuestros clientes dicen...</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
    <?php 

      $arg_testimonios = array(
        'post_type' => 'testimonios',
        'orderby' => 'rand'
      );

      $consulta_testimonios = new WP_Query($arg_testimonios);


        while($consulta_testimonios -> have_posts()) : $consulta_testimonios -> the_post();
    
    ?>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4"><?php the_content() ?></p>
                    <p class="name"><?php the_title() ?></p>
                  
                  </div>
                </div>
              </div>
       <?php  endwhile; ?>
      <?php wp_reset_query(); ?>
      <?php wp_reset_postdata(); ?>
             
             
            </div>
          </div>
        </div>
      </div>
		</section>