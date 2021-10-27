<?php 

    require('class.vehiculo.php');
    require('class.moto.php');

    $fiat = new Vehiculo('blanco', 4, '80cv', 'fiat');
    $ferrari = new Vehiculo('rojo', 4, '400cv', 'ferrari');

    $fiat->color = 'rojo';
    var_dump($fiat->color);
    //no se puede hacer porque la propiedad es protegida,  pasa exactamente lo mismo con la private.
     //$fiat->numeroRuedas = 3;
     var_dump($fiat->getRuedas());
     $fiat->arrancarMotor();
    var_dump($fiat->motorArrancado);

    $fiat->acelerar(50);
    $fiat->frenar();
    var_dump($fiat->velocidad);
echo '<br>';
    //moto

    $honda = new Moto('Amarilla', 2, '300cv', 'Honda', '2000cc');
 
    var_dump($honda->getMarca());
    $honda->arrancarMotor();
    echo $honda->motorArrancado;
    echo $honda->hacerCaballito();

    echo '<br>';

    echo $honda->getRuedas();

?>