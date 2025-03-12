<?php
namespace Alumma\Tarea;
/**
 * Proyecto: Antonov_DEAW06
 * Descripción: Proyecto PHP con documentecion
 * Autor: Simon
 * Fecha: 12/03/2025
 */
/**
 * Clase Usuario para gestionar información de usuarios.
 */
class Usuario {
    /** @var string El nombre del usuario */
    private string $nombre;
    /** @var string El correo del usuario */
    private string $correo;

    /**
     * Constructor de la clase Usuario.
     *
     * @param string $nombre El nombre del usuario.
     * @param string $correo El correo del usuario.
     */
    public function __construct(string $nombre, string $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    /**
     * Muestra la información del usuario.
     *
     * @return string
     */
    public function mostrarInformacion(): string {
        return "Nombre: $this->nombre, Correo: $this->correo";
    }
}

?>