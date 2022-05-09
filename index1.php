<!-- pasar datos de una pagina a otra -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Calcular pedido</h1>
    <form action="calcular.php" method="post">
        <label for="">Producto:</label>
        <select name="producto" id="">
            <option value="Arroz">Arroz</option>
            <option value="Leche">Leche</option>
            <option value="Azucar">Azucar</option>
            <option value="Yogurt">Yogurt</option>
        </select>
        <label for="">Precio</label>
        <input type="text" name="precio" id="">
        <label for="">Cantidad</label>
        <input type="text" name="cantidad" id="">
        <select name="formaPago" id="">
            <option value="Tarjeta">Tarjeta</option>
            <option value="Efectivo">Efectivo</option>
        </select>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>