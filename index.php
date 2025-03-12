<?php
require __DIR__ . '/vendor/autoload.php';
use Alumma\Tarea\Pedido;
use Alumma\Tarea\Usuario;
use Alumma\Tarea\Producto;
// Ejemplo de uso
$usuario = new Usuario("Juan Perez", "juan@example.com");
$usuario = new Usuario("Juan Perez", "juan@example.com");
$producto = new Producto("Laptop", 999.99);
$pedido = new Pedido($usuario, $producto);

echo $pedido->mostrarResumen();

?>