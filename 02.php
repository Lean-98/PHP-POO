<?php

declare(strict_types=1);
include 'includes/header.php';


//ENCAPSULACIÓN
class Producto
{

    // Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    // protected - Se puede acceder / modificar unicamente en la clase
    // private solo miembros de la misma clase pueden acceder a el

    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto(): void
    {
        echo "El Producto es: " . $this->nombre . " y su Precio es de:$ " . $this->precio;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
}

// Constructor: es una función que se va a mandar a llamar automaticamente una vez que se a creado una nueva instancia.
// Metodos = funciones



// Instancear
$producto = new Producto('Smart TV 55°', 600, true);
// $producto->mostrarProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo 34°', 450, false);
// $producto2->mostrarProducto();

echo $producto2->getNombre();

// echo"<pre>";
// var_dump($producto2);
// echo"</pre>";

include 'includes/footer.php';
