<!DOCTYPE html>
<html>
<head>
    <title>Número Aleatorio y Tabla</title>
</head>
<body>
    <?php
    // Generar un número aleatorio entre 3 y 20
    $numeroAleatorio = rand(3, 20);

    // Mostrar el número en pantalla
    echo "El número es el " . $numeroAleatorio;
    ?>

    <br><br>

    <!-- Crear una tabla con tantas casillas como el número aleatorio -->
    <table border="1">
        <tr>
            <?php
            for ($i = 1; $i <= $numeroAleatorio; $i++) {
                echo "<td>Casilla $i</td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>