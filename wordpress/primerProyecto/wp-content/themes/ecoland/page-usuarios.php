<?php get_header() ?>
    <main>
        <section class="ftco-section ftco-services-2" id="services-section">
		    <div class="container">
                <h1>Usuarios</h1>
                <hr>
                <?php 
                
                $datos = getApiData('https://reqres.in/api/users', 'GET', [], array('page' => 2));
                    //var_dump($datos['data']);
                
                foreach ($datos['data'] as $user) {
                    echo '<article>
                        <img src="'.$user['avatar'].'" alt="'.$user['first_name'].'">
                        <h3>'. $user['first_name'].' '.$user['last_name'].'</h3><p><a href="mailto:'. $user['email'].'">'. $user['email'].'</a></p>
                    </article>';
                }
                
                ?>


            </div>
        </section>
        <h2>Peticion por post recibiendo un token</h2> 

        <?php

            $ruta = "http:///www.agenciaviajes.es";
            $user = "eve.holt@reqres.in";
            $pass = "cityslicka";
            $urlPeticion = 'https://reqres.in/api/login';

            //me tienes que hacer una peticion y yo te devuelvo un token

            $peticion = getApiData($urlPeticion, 'POST', [], [], array('email' => $user, 'password' => $pass));

            $token = $peticion['token'];

            $urlResultante = $ruta."/".$token;

            echo $urlResultante;
        
        
        ?>
    </main>



<?php get_footer() ?>