
<?php

class widget_suscriber extends WP_Widget{

    public function __construct(){
        $opciones = array('class_name' => 'widget_suscriber', 'description' => 'Formulario de alta suscriptores');
        parent::__construct('widget_suscriber', 'Formulario de suscripcion', $opciones);
    }

    //es para la visualizacion del widget

    public function widget($args, $instance){
        echo '<div class="col-md-9 text-center">
						<h2>Suscribete a nuestra newsletter</h2>
						<p>Obtendras ofertas y promociones en nuestros viajes</p>
						<form action="" method="POST">
							<input type="text" name="email">
							<input type="submit" value="Suscribirse">
						</form>
					</div>';

        if(isset($_POST['email']))
        {
            //guardar en BBDD los datos delk suscriptor
             global $wpdb;
            global $table_prefix;
            $table_name = $table_prefix."suscribers";
            $peticion = "INSERT INTO {$table_name} VALUES (NULL, '{$_POST['email']}')";
            $insercion = $wpdb->get_results($peticion);

            if(isset($insercion)){
                echo "<p>Usuario registrado correctamente</p>";
            }else{
                 echo "<p>Usuario no registrado correctamente</p>";
            }



        }
    }


    //el metodo que me permite cambiar la configuracion del widget

    public function form($intance)
    {
        echo '<h1>Formulario de suscriptores</h1>';
    }


    
}

?>