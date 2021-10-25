<?php 
    //un array multidimensional es un array de arrays.
    
    $zoo = array();

    $aves = array('Aguila', 'Buho', 'Halcon');
    $felinos = array('Leon', 'Tigre', 'Leopardo');
    $reptiles = array('Serpiente', 'Lagarto', 'Iguana', 'Cocodrilo');

    //un array multidimensional es el que tiene un array como elemento dentro del mismo

    $zoo = [$aves, $reptiles, $felinos];

    print_r($zoo);

    for($i = 0; $i < count($zoo); $i++)
    {
        echo '<ul>';
        
        for($j = 0; $j < count($zoo[$i]) ; $j++)
        {
            echo '<li>'.$zoo[$i][$j].'</li>';
        }
        
        echo'</ul>';
    }


?>