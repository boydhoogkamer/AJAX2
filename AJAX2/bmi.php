<?php
 $gewicht= $_GET["gewicht"];
 $lengte = $_GET["lengte_cm"];
 BMIcalc($gewicht,$lengte);

function BMIcalc($gewicht,$lengte){
    echo "uw gewicht is: " . $gewicht . "kg<br>" ;
    echo "uw lenhte is: " . $lengte . "cm<br>";
    $lengte = $lengte / 100; //convert to meters
    $BMI = $gewicht / ($lengte * $lengte);
    $BMI = round($BMI,2);//afronden 2 decimalen
    echo "uw BMI is: " . $BMI . "<br>";
    if($BMI > 40){
        echo "you are a fat cow";
    }
}
 ?>
