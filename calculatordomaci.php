<?php

   $cenaProizvoda = $_GET["cenaProizvoda"];

    $vrstaProizvoda = $_GET["vrstaProizvoda"];

    if($vrstaProizvoda == "Hrana")
    {
        $cenaProizvoda += 50;
    }
    else if($vrstaProizvoda == "Racunarska oprema")
    {
        $cenaProizvoda += 350;
    }

    if( isset($_GET['porez']) )
    {
        $cenaProizvoda = ($cenaProizvoda*0.10)+$cenaProizvoda;
    }

    echo $cenaProizvoda;