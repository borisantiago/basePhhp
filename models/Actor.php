<?php

    class Actor {
        private $idActor;
        private $nombre;
        private $apellidos;
        private $fechaNacimiento;
        private $nacionalidad;


    public function Actor($idActor, $nombreActor, $apellidosActor, $fechaNacimientoActor, $nacionalidadActor){
        $this->idActor = $idActor;
        $this->nombre = $nombreActor;
        $this->apellidos = $apellidosActor;
        $this->fechaNacimiento = $fechaNacimientoActor;
        $this->nacionalidad = $nacionalidadActor;
    }

    public function getIdActor(){
        return $this->idActor;
    }

    public function setIdActor($idActor){
        return $this->idActor = $idActor;
    }


    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombreActor){
        return $this->nombre = $nombreActor;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidosActor){
        return $this->apellidos = $apellidosActor;
    }

    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimientoActor){
        return $this->fechaNacimiento = $fechaNacimientoActor;
    }

    public function getNacionalidad(){
        return $this->nacionalidad;
    }

    public function setNacionalidad($nacionalidadActor){
        return $this->nacionalidad = $nacionalidadActor;
    }


    }

?>