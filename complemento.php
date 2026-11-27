<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Destinos turisticos </h2> <br>
    <h1>Generador De Paquetes Turisticos</h1> <br><hr>
    <h2>Usuario y correo electronico</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $texto = htmlspecialchars($_POST['nombre']);
            echo "<h3>Usuario: " . $texto . "</h3>";
        }
    ?>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $texto = htmlspecialchars($_POST['email']);
            echo "<h3>Correo: " . $texto . "</h3>";
        }
    ?>
    <hr>
    <h2>Destinos turisticos </h2>
    <?php
        $destinos=$_POST['destinos'] ?? [];
        foreach($destinos as $des){
        echo $des . "<br>";
        }
    ?>
    <h2>Actividades turisticas</h2> <br>
    <hr>
    <h2>Actividades turisticas</h2>
    <?php
        $act=$_POST['activ'] ?? [];
        foreach($act as $ac){
        echo $ac . "<br>";
        }
    ?>
</body>
</html>
<?php
    echo "Lugares elegidos: <br>";
    $viaje=$_POST['destinos'] ?? [];
    foreach($viaje as $vi){
        echo $vi . "<br>";
    }
?>
    <hr>
    <h2>Servicios adicionales</h2>
    <?php
        $serv=$_POST['ser'] ?? [];
        foreach($serv as $sr){
        echo $sr . "<br>";
    }
    ?>
    <hr>
</body>
</html>
