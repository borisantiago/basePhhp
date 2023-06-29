<?php
    require_once('../connection.php');

    class Plataforma {
        private $idPlataforma;
        private $nombre;

    public function Paltaforma($idPlataforma, $nombrePlataforma){
        $this->idPlataforma = $idPlataforma;
        $this->nombre = $nombrePlataforma;
    }

    public function getIdPlataforma(){
        return $this->idPlataforma;
    }

    public function setIdPlataforma($idPlataforma){
        return $this->idPlataforma = $idPlataforma;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombrePlataforma){
        return $this->nombre = $nombrePlataforma;
    }

    public function getAll(){

        $mysqli = $this -> initConnectionDb();

        $query = $mysqli -> query("SELECT * FROM plataformas");
        $listaData = [];

        foreach($query as $item){
            $itemObject = new Plataforma($item['id_plataforma'], $item['nombre']);
            array_push($listaData, $itemObject);
        }

        $mysqli -> close();

        return $listaData;

    }
    
    }

    
?>