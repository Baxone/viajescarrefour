<?php 

    $listaImagenes = array('imagen1.jpg','imagen2.jpg','imagen3.jpg','imagen4.jpg','imagen5.jpg','imagen6.jpg');

    function cargarImagen(){

      $imagenCargar = (!$_GET['id']) ? $GLOBALS['listaImagenes'][0] : 
      $GLOBALS['listaImagenes'][$_GET['id']];

      return $imagenCargar;
    
    }

    function cargarBotones($pListaImagenes){
        $menuHTML = "";
        for($i = 0; $i < count($pListaImagenes); $i++)
        {
            $numeroPagina = $i + 1;
            $menuHTML = $menuHTML . '<a href="index.php?id='.$i.'">'.$numeroPagina.'</a>';
        }
        echo $menuHTML;
    }


?>