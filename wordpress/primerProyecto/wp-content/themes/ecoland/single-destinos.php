<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<?php 
  //voy a recoger todos los datos antes de pintar el post.

      $precio = get_field('precio');
	  	$dias = get_field('dias');
		  $imagen = get_field('imagen')['url'];
      $calendario = get_field('calendario');
      $cancelacion = get_field('cancelacion');
      $edadMaxima = get_field('edad_maxima');

      $idImagen = get_post_thumbnail_id();
      //pedir la url de la image
      $datosImagen = wp_get_attachment_image_src($idImagen, 'full', true);
      $url = $datosImagen[0];


?>
     <section class="hero-wrap" style="background-image: url(<?= $url ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread"><?php the_title() ?></h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-services-2 ftco-no-pt">
    	<div class="container-fluid px-0 bg-light">
    		<div class="container">
    			<div class="row tour py-5">
        	<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-alarm-clock"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?= $dias ?></h3>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-manager"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?= $edadMaxima ?></h3>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-calendar"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?= $calendario ?></h3>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-layers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Puede cancelar hasta <?= $cancelacion ?></h3>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-wallet"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?= $precio ?></h3>
              </div>
            </div>      
          </div>
        </div>
    		</div>
    	</div>
      <div class="container">
        <div class="row">
        	<div class="col-md-12 tour-wrap mb-5">
    				<div class="row">
    					<div class="col-md-6 d-flex ftco-animate">
    						<div class="img align-self-stretch" style="background-image: url(<?= $imagen ?>);"></div>
    					</div>
    					<div class="col-md-6 ftco-animate">
    						<div class="text py-5">
    							<h3><?php the_title(); ?></h3>
    							<p class="pos">Precio <span class="price"><?= $precio ?></span>- <?= $dias ?></p>
    							<div>
                    <?php the_content() ?>
                  </div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-12 tour-wrap">
    				<p><a href="#" class="btn btn-primary py-3 px-4">Reserve this tour</a></p>
    			</div>
        </div>
      </div>
    </section> 

<?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>