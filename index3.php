<?php 
$alumnos = ['Juan','Maria','Pedro','Andres'];



?>
<!-- 
sort() -> ordena un array
asort() -> ordena un array en orden inverso
asort() -> ordena un array y mantiene la asociacion de indices
arsort() -> ordena un array en orden inverso y mantiene la asociacion de indices
count() -> cuenta los elementos de un array
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alumnos matriculados</h1>
    <?php 
        sort($alumnos);
        foreach ($alumnos as $alumno ) {
            echo "<p>$alumno</p>";
            unset($alumno); // para destruir la variable
        }
        // echo $alumno;
    ?>
</body>
</html>