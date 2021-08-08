<?php

public function TipoEjercicio(){
    private $idTipoEjercicio;
    private $nombreTipoEjercicio;

    //constructor
    public function __constructor($idTipoEjercicio, $nombreTipoEjercicio){
        $this->idTipoEjercicio = $idTipoEjercicio;
        $this->nombreTipoEjercicio = $nombreTipoEjercicio;
    }

    //METODO GETS
    public function getIdTipoEjercicio(){
        return $this->idTipoEjercicio;
    }

    public function getNombreTipoEjercicio(){
        return $this->nombreTipoEjercicio;
    }
    //METODO SETS
    public function setIdTipoEjercicio($idTipoEjercicio){
        $this->idTipoEjercicio = $idTipoEjercicio;
        return $this;
    }

    public function setNombreTipoEjercicio($nombreTipoEjercicio){
        $this->nombreTipoEjercicio = $nombreTipoEjercicio;
        return $this;
    }
}
?>