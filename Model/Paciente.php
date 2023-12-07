<?php
namespace App\Model;

abstract class Paciente {
    protected $dni;
    protected $nombre;
    protected $apellido;
    protected $telefono;
    protected $fechaNacimiento;
    protected $obraSocial;
    protected $fechaIngreso;

    public function __construct($dni, $nombre, $apellido, $telefono, $fechaNacimiento, $obraSocial, $fechaIngreso) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->obraSocial = $obraSocial;
        $this->fechaIngreso = $fechaIngreso;
    }

    // Agregar getters y setters según sea necesario para acceder y modificar los datos
}
?>
