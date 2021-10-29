<?php get_header() ?>
<!-- Vamos a hablar de loop es la forma con la que hacemos consultas personalizadas en funcion de la plantilla -->
    <main>

    <?php while(have_posts()) : the_post(); ?>
		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb mt-5" id="about-section">
    	<div class="container">
    		<div class="row no-gutters d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
<?php
    //primer paso campuro el id de la imagen destacada del mi publicacion
    $thumb_id_image = get_post_thumbnail_id();
     
    //con el id de la imagen pita la imagen asociada a ese id con el tamaño que yo quiera (acordaros que wordpress guarda cuatro tamaños definos en ajustes.'thumbnail', 'small' , 'large', 'full' )

    $thumb_url = wp_get_attachment_image_src( $thumb_id_image, 'full');

?>
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(<?= $thumb_url[0]; ?>);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 px-lg-5 py-md-5 bg-darken">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section p-5 p-lg-0">
			          	<span class="subheading"><?= get_post_meta(get_the_ID(),'subtitle', true); ?></span>
			            <h2 class="mb-4"><?php the_title(); ?></h2>
			            <div>
                            <?php the_content(); ?>
                        </div>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    <?php wp_reset_postdata(); ?>
</main>
<?php get_footer() ?>