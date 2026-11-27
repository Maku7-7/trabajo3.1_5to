<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Destinos turisticos </h2> <br>
    <?php
        $destinos=$_POST['destinos'] ?? [];
        foreach($destinos as $des){
        echo $des . "<br>";
        }
    ?>
    <h2>Actividades turisticas</h2> <br>
    <?php
        $act=$_POST['activ'] ?? [];
        foreach($act as $ac){
        echo $ac . "<br>";
        }
    ?>
</body>
</html>