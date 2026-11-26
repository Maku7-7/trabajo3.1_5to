<?php
    echo "Lugares elegidos: <br>";
    $viaje=$_POST['destinos'] ?? [];
    foreach($viaje as $vi){
        echo $vi . "<br>";
    }
?>