<?php
declare( strict_types = 1);
include 'includes/header.php';

// Definir una Clase
// Sintaxis antigua de versiones inferiores a PHP 8
// class Producto {
//     public $nombre;
//     public $precio;
//     public $disponible;

//     public function __construct(string $nombre, int $precio, bool $disponible)
//     {
//         $this->nombre = $nombre;
//         $this->precio = $precio;
//         $this->disponible = $disponible;
//     }
// }

 //Nueva Sintaxis PHP 8
 // ABSTRACCIÓN : definir atributos, definir metodos. La forma que van a tener los datos en las clases.
 // Definir una clase
 class Producto {
     public function __construct(public string $nombre, public int $precio, public bool $disponible)
     {
     }

     public function mostrarProducto() {
        echo "El Producto es: " . $this->nombre . " y su Precio es de:$ " . $this->precio;
     }
 }

// Constructor: es una función que se va a mandar a llamar automaticamente una vez que se a creado una nueva instancia.
// Metodos = funciones

// Instancear
$producto = new Producto('Smart TV 55°', 600, true);
$producto->mostrarProducto();

echo"<pre>";
var_dump($producto);
echo"</pre>";

$producto2 = new Producto('Monitor Curvo 34°', 450, false);
$producto2->mostrarProducto();

echo"<pre>";
var_dump($producto2);
echo"</pre>";

include 'includes/footer.php';