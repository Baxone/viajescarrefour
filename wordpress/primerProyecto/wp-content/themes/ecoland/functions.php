<?php 

//añadimos a nuestro tema la posibilidad de tener imagen destacada.

add_theme_support('post-thumbnails');


//como crear un shortcode para maquetar diferentes tipos de contenidos.

add_shortcode('caja', 'shortcode_mostrar_caja');

function shortcode_mostrar_caja($atributos){

    $valores = shortcode_atts(array('icon'), $atributos);

    return '<div class="col-md d-flex align-self-stretch">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="'.$valores['icon'].'"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Activities</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>';
}

?>