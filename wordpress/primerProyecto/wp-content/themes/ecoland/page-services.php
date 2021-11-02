<?php get_header() ?>
<!-- Vamos a hablar de loop es la forma con la que hacemos consultas personalizadas en funcion de la plantilla -->
    <main>
	
    <?php while(have_posts()) : the_post(); ?>
		<section class="ftco-section ftco-services-2" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center">
          	<span class="subheading">
				  <?= get_post_meta(get_the_ID(),'subtitle', true); ?>
				</span>
            <h2 class="mb-4"><?php the_title(); ?></h2>
            <div>
			        	<?php the_content(); ?>
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