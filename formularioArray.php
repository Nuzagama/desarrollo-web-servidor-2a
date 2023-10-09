<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- require para incluir archivos -->
</head>
<body>
    <!--
    // Vamos a tener una tabla con 3 columnas
    // Productos, Precio, Cantidad
    // Primero hacer un Array Bidimensional y mostramos la tabla
    // Luego creamos un formulario con Producto, Precio y Cantidad
    // Con el Boton insertaremos los datos del formulario
    -->
    <form action = "" method="post">
        <br>
        <label>Producto</label>
        <input type = "text" name= "productoItem">
        <label>Precio</label>
        <input type = "text" name= "precioItem">
        <label>Cantidad</label>
        <input type = "text" name= "cantidadItem">
        <br><br>
        <input type="submit" value="Insertar en la Tabla">
    </form>

    
    <?php
    $productos = [
        ["Pizza", 5, 2],
        ["Palmera de Chocolate", 1, 3],
        ["Tortilla de Patatas", 2, 9],
        ["Ensalada Mixta", 4, 7],
        ["Chuletitas de Cordero", 8, 4],
    ];




    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST["productoItem"];
        $precio = (float)$_POST["precioItem"];
        $cantidad = (int)$_POST["cantidadItem"];
        
        $nuevoItem = [$nombre, $precio, $cantidad];
        array_push($productos, $nuevoItem);
    }


    echo "<br>
    <table>
        <thead>
            <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            </tr>
        </thead>";

        foreach($productos as $producto){
            list($nombre, $precio, $cantidad) = $producto;
            echo "<tbody>
            <tr>
            <td>$nombre</td>
            <td>$precio</td>
            <td>$cantidad</td>
            </tr>";
        }
    echo "</tbody>";
    echo "</table>";
    echo "<br>";


    ?>









</body>
</html>