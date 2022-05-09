<?php 
    // function notificar()
    // {
    //     echo 'Tiene un mensaje';
    // }
    
    function conversor($cantidad){
        $total = $cantidad /3.28;
        echo 'El total de dolares es: S/.'.$total;
        round($total,2);
    }

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
    <?php 
    conversor(100);
    
    ?>
</body>
</html>