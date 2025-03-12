<?php
namespace Alumma\Tarea;
/**
 * Proyecto: Antonov_DEAW06
 * Descripción: Proyecto sencillo en PHP con tres clases y documentación phpDocumentor.
 * Autor: Simon
 * Fecha: 12/03/2025
 */

 
/**
 * Clase Producto para gestionar productos.
 */
class Producto {
    /** @var string El nombre del producto */
    private string $nombre;
    /** @var float El precio del producto */
    private float $precio;

    /**
     * Constructor de la clase Producto.
     *
     * @param string $nombre El nombre del producto.
     * @param float $precio El precio del producto.
     */
    public function __construct(string $nombre, float $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    /**
     * Obtiene el precio del producto.
     *
     * @return float
     */
    public function obtenerPrecio(): float {
        return $this->precio;
    }
}
