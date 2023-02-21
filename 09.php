<?php include 'includes/header.php';

// Conectar a la BD con Mysqli.

$db = new mysqli('localhost', 'root', 'root', 'bienes-raices');

// Creamos el query
$query = "SELECT titulo from propiedades";

// Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

// Creamos la variable
$stmt->bind_result($titulo);

// Asignamos el resultado
// $stmt->fetch();

// Imprimir un solo resultado
// var_dump($titulo);
// var_dump($imagen);

// Imprime multiples resultados
while($stmt->fetch()) :
    var_dump($titulo);
endwhile;

include 'includes/footer.php';