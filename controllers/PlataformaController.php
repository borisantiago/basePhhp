<?php
require_once('../models/Plataforma.php');

function listaPlataforma(){
    $model = new Plataforma();
    $plataformaLista = $model->getAll();
    $plataformaObjectArray = [];

    foreach($plataformaLista as $plataformaItem){
        $plataformaObject = new Plataforma($plataformaItem -> getIdPlataforma(), $plataformaItem -> getNombre());
        array_push($plataformaObjectArray, $plataformaObject);   
    }

    return $plataformaObjectArray;

}

?>