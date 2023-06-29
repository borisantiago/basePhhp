<?php

    class Idioma {
        private $idIdioma;
        private $nombre;
        private $isoCode;

    public function Paltaforma($idIdioma, $nombreIdioma, $isoCodeIdioma){
        $this->idIdioma = $idIdioma;
        $this->nombre = $nombreIdioma;
        $this->isoCode = $isoCodeIdioma;

    }

    public function getIdIdioma(){
        return $this->idIdioma;
    }

    public function setIdIdioma($idIdioma){
        return $this->idIdioma = $idIdioma;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombreIdioma){
        return $this->nombre = $nombreIdioma;
    }

    public function getIsoCode(){
        return $this->isoCode;
    }

    public function setIsoCode($isoCodeIdioma){
        return $this->isoCode = $isoCodeIdioma;
    }

    }

?>