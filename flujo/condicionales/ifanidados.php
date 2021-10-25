<?php 

    $nota = 14;

    if($nota >= 0 && $nota < 5)
    {
        echo '<h1>SUSPENSO</h1>';
    }
    else if($nota >=  5 && $nota < 6)
    {
        echo '<h1>SUFICIENTE</h1>';
    }
    else if($nota >=  6 && $nota < 7)
    {
        echo '<h1>BIEN</h1>';
    }
    else if($nota >=  7 && $nota < 9)
    {
        echo '<h1>NOTABLE</h1>';
    }
    else if($nota >=  9 && $nota <= 10)
    {
        echo '<h1>SOBRESALIENTE</h1>';
    }
    else
    {
        echo '<h1>Esta nota no es correcta</h1>';
    }


?>