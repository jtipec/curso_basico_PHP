<?php
//if(!$_POST){ // sino esta reciviendo ningun dato
if(isset($_POST)){ // verifica que la variable esta definido
    header('Location:index1.php'); 
}

$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$subtotal = $precio * $cantidad;
$formaPago = $_POST['formaPago'];

if ($formaPago == 'Tarjeta') {
    $descuento = $subtotal * 0.2;
} else {
    $descuento = $subtotal * 0.1;
}

$total = $subtotal-$descuento;
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
    <p>producto: <?php echo $producto; ?> </p>
    <p>precio: <?php echo $precio; ?> </p>
    <p>cantidad: <?php echo $cantidad; ?> </p>
    <p>Forma de pago: <?php echo $formaPago; ?> </p>
    <p>Subtotal: <?php echo $subtotal; ?> </p>
    <p>Descuento: <?php echo $descuento; ?> </p>
    <p>Total: <?php echo $total; ?> </p>
</body>
</html>
