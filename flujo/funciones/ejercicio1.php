<?php 

    //calcule el pvp de un viaje.
    calcularPvp(100, 0.10, 0.15);

    function calcularPvp($precioProducto, $pImpuesto, $pMargen)
    {
        $iva = calcularIva($precioProducto,$pImpuesto);
        $margen = calcularMargen($precioProducto, $pMargen);
        $pvp = $precioProducto + $iva + $margen;

        echo '<h1>El viaje te cuesta '.$pvp.'</h1>';
    }

    function calcularMargen($pPrecio, $pMargen){
        return $pPrecio * $pMargen;
    }



    function calcularIva($precioProducto, $pImpuesto)
    {
        $resultado = $precioProducto * $pImpuesto;
        return $resultado;

    }


?>