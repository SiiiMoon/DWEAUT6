<?php
namespace Alumma\Tarea;
/**
 * Proyecto: Antonov_DEAW06
 * Descripción: Proyecto sencillo en PHP con tres clases y documentación phpDocumentor.
 * Autor: Simon
 * Fecha: 12/03/2025
 */

 
/**
 * Clase Pedido para gestionar pedidos de productos.
 */
class Pedido {
    /** @var Usuario El usuario que realiza el pedido */
    private Usuario $usuario;
    /** @var Producto El producto solicitado */
    private Producto $producto;

    /**
     * Constructor de la clase Pedido.
     *
     * @param Usuario $usuario El usuario que realiza el pedido.
     * @param Producto $producto El producto solicitado.
     */
    public function __construct(Usuario $usuario, Producto $producto) {
        $this->usuario = $usuario;
        $this->producto = $producto;
    }

    /**
     * Muestra el resumen del pedido.
     *
     * @return string
     */
    public function mostrarResumen(): string {
        return $this->usuario->mostrarInformacion() . " ha pedido el producto: " . $this->producto->obtenerPrecio() . " EUR.";
    }
}
