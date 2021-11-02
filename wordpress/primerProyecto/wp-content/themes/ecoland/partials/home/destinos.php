<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center">
          	<span class="subheading">Destinos Destacados</span>
            <h2 class="mb-4">Los mejores viajes de nuestros clientes</h2>
            <p>Aquí podrás ver los viajes destacados de nuestra agencia</p>
          </div>
        </div>
    		<div class="row">
	<!-- vamos hacer un consulta al ORM de wordpress para traernos todos los elementos de tipo destino -->

	<!--  
		WP_Query CODEX  
		https://developer.wordpress.org/reference/classes/wp_query/
	-->
<?php
	$args_destinos_destacados = array(
		'post_type' => 'destinos',
		'category_name' => 'destacados'
	);
	$consulta_destinos = new WP_Query($args_destinos_destacados);

	while($consulta_destinos -> have_posts()): $consulta_destinos ->the_post();

		$precio = get_field('precio');
		$dias = get_field('dias');
		$imagen = get_field('imagen')['url'];
		
	
?>
    			<div class="col-md-6 col-lg-4">
    				<div class="project">
    					<div class="img">
		    				<a href="<?php the_permalink() ?>"><img src="<?= $imagen ?>" class="img-fluid" alt="<?php the_title() ?>"></a>
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><?= $precio ?> €</h4>
	    					<span><?= $dias ?></span>
	    					<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
	    				</div>
	    				<a href="<?= $imagen ?>" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>

 	<?php endwhile; ?>
    <?php wp_reset_query(); ?>
    <?php wp_reset_postdata(); ?>

    			
    		</div>
    	</div>
    </section>