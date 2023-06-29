<?php

    class Director {
        private $idDirector;
        private $nombre;
        private $apellidos;
        private $fechaNacimiento;
        private $nacionalidad;


    public function Director($idDirector, $nombreDirector, $apellidosDirector, $fechaNacimientoDirector, $nacionalidadDirector){
        $this->idDirector = $idDirector;
        $this->nombre = $nombreDirector;
        $this->apellidos = $apellidosDirector;
        $this->fechaNacimiento = $fechaNacimientoDirector;
        $this->nacionalidad = $nacionalidadDirector;
    }

    public function getIdDirector(){
        return $this->idDirector;
    }

    public function setIdDirector($idDirector){
        return $this->idDirector = $idDirector;
    }


    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombreDirector){
        return $this->nombre = $nombreDirector;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidosDirector){
        return $this->apellidos = $apellidosDirector;
    }

    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimientoDirector){
        return $this->fechaNacimiento = $fechaNacimientoDirector;
    }

    public function getNacionalidad(){
        return $this->nacionalidad;
    }

    public function setNacionalidad($nacionalidadDirector){
        return $this->nacionalidad = $nacionalidadDirector;
    }


    }

?>