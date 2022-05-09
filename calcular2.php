<?php 
if (!$_POST) { // sino esta pasando ningun dato
    header('Location:index2.php');
}

$tabla = $_POST['tabla'];
$maximo = $_POST['maximo'];
$multiplicador = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php while($multiplicador <= $maximo){
        echo "<p>{$multiplicador} * {$tabla} = ". $multiplicador * $tabla ."</p>";
        $multiplicador++;
    } ?>
</body>
</html>