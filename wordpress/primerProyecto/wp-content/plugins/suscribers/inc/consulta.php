<div class="wrap">
  <h1 class="wp-heading-inline">Listado Newsletter</h1>

    <table class="wp-list-table widefat fixed" >
        <tr>
            <th class="manage-column column-primary">ID</th>
            <th class="manage-column column-primary">Email</th>
            <th>#</th>
        </tr>
   

    <?php 
            //tengo que hacer una consulta a BBDD
            //wpdb me permite hacer consultas mysql desde wordpress sin usar las funciones propias del ORM de Wordpress.
            global $wpdb;
            global $table_prefix;
            $table_name = $table_prefix."suscribers";
            $peticion = "SELECT id, email FROM {$table_name}";
            $consulta = $wpdb->get_results($peticion);
            
            
            foreach ($consulta as $registro) {

                $borrar_link = "?page=eco_newsletter&action=delete&id=".$registro->id;
           
            ?>

                <tr>
                    <td class="has-row-actions column-primary"><?= $registro->id ?></td>
                    <td><a href="mailto:<?= $registro->email ?>"><?= $registro->email ?></a></td>
                    <td><a href="<?= $borrar_link ?>" onclick="confirm('Desea borrar el email ')" >Borrar</a></td>
                </tr>



            <?php
            }
    ?>

     </table>
</div>