<?php

    class Serie {
        private $idSerie;
        private $titulo;
        private $idPlataforma;
        private $idDirectores;
        private $idActor;
        private $audio;
        private $subtitulo;



    public function Paltaforma($idSerie, $tituloSerie, $idPlataforma, $idDirectores, $idActor, $audio, $subtitulo){
        $this -> idSerie = $idSerie;
        $this -> titulo = $tituloSerie;
        $this -> idPlataforma = $idPlataforma;
        $this -> idDirectores = $idDirectores;
        $this -> idActor = $idActor;
        $this -> audio = $audio;
        $this -> subtitulo = $subtitulo;
    }

    public function getIdSerie(){
        return $this -> idSerie;
    }

    public function setIdSerie($idSerie){
        return $this -> idSerie = $idSerie;
    }

    public function getTitulo(){
        return $this -> titulo;
    }

    public function setTitulo($tituloSerie){
        return $this -> titulo = $tituloSerie;
    }

    public function getIdPlataforma(){
        return $this -> idPlataforma;
    }

    public function setIdPlataforma($idPlataforma){
        return $this -> idPlataforma = $idPlataforma;
    }

    public function getIdPlataforma(){
        return $this -> idPlataforma;
    }

    public function setIdPlataforma($idPlataforma){
        return $this -> idPlataforma = $idPlataforma;
    }

    public function getIdDirectores(){
        return $this -> idDirectores;
    }

    public function setIdDirectores($idDirectores){
        return $this -> idDirectores = $idDirectores;
    }

    public function getIdActor(){
        return $this->idActor;
    }

    public function setIdActor($idActor){
        return $this->idActor = $idActor;
    }

    public function getAudio(){
        return $this->audio;
    }

    public function setAudio($audio){
        return $this->audio = $audio;
    }

    public function getSubtitulo(){
        return $this->subtitulo;
    }

    public function setSubtitulo($subtitulo){
        return $this->subtitulo = $subtitulo;
    }


    }

?>