<?php

namespace Hospital\Controller;

use Hospital\Model\Database;
use Hospital\Model\Paciente;

class RegistroController {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function index() {
        try {
            // Lógica para obtener pacientes utilizando la clase abstracta Paciente
            // ...

            include __DIR__ . '/../View/registro.php';
        } catch (\PDOException $e) {
            echo "Error al obtener registros: " . $e->getMessage();
        }
    }

    public function nuevoRegistro() {
        try {
            // Lógica para agregar un nuevo registro utilizando la clase abstracta Paciente
            // ...

            header("Location: http://localhost/Hospital/index.php?url=registro");
        } catch (\PDOException $e) {
            echo "Error al insertar paciente: " . $e->getMessage();
        }
    }

    public function editarPaciente($dni, $nombre, $apellido, $telefono, $fechaNacimiento, $obraSocial, $fechaIngreso) {
        try {
            // Edita el paciente por su DNI utilizando los nuevos datos proporcionados
            $this->db->editarPacientePorDNI($dni, $nombre, $apellido, $telefono, $fechaNacimiento, $obraSocial, $fechaIngreso);

            // Redirige a la página de listado de pacientes después de la edición
            header("Location: index.php?url=registro");
        } catch (\PDOException $e) {
            echo "Error al editar paciente: " . $e->getMessage();
        }
    }

    public function actualizarPaciente($dni, $nombre, $apellido, $telefono, $fechaNacimiento, $obraSocial, $fechaIngreso) {
        try {
            // Actualiza los datos del paciente por su DNI utilizando los nuevos datos proporcionados
            $this->db->actualizarPacientePorDNI($dni, $nombre, $apellido, $telefono, $fechaNacimiento, $obraSocial, $fechaIngreso);

            // Redirige a la página de listado de pacientes después de la actualización
            header("Location: index.php?url=registro");
        } catch (\PDOException $e) {
            echo "Error al actualizar paciente: " . $e->getMessage();
        }
    }

    public function eliminarPaciente($dni) {
        try {
            // Elimina al paciente por su DNI
            $this->db->eliminarPacientePorDNI($dni);

            // Redirige a la página de listado de pacientes después de la eliminación
            header("Location: index.php?url=registro");
        } catch (\PDOException $e) {
            echo "Error al eliminar paciente: " . $e->getMessage();
        }
    }
}
?>
