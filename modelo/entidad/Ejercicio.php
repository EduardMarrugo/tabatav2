<?php

class Ejercicio{
    public $idEjercicio;
    public $nombreEjercicio;
    public $descripcion;
    public $idTipoEjercicio;
    public $imagen;
    public $video;

    //constructor
    public function __construct($idEjercicio, $nombreEjercicio, $descripcion, $idTipoEjercicio, $imagen, $video){
        $this->idEjercicio = $idEjercicio;
        $this->nombreEjercicio = $nombreEjercicio;
        $this->descripcion = $descripcion;
        $this->idTipoEjercicio = $idTipoEjercicio;
        $this->imagen = $imagen;
        $this->video = $video;
    }

    //METODO GETS
    public function getIdEjercicio(){
        return $this->idEjercicio;
    }
    public function getNombreEjercicio(){
        return $this->nombreEjercicio;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getIdTipoEjercicio(){
        return $this->idTipoEjercicio;
    }

    public function getImagen(){
        return $this->imagen;
    }
    public function getVideo(){
        return $this->video;
    }
    //METODO SETS
    public function setIdEjercicio($idEjercicio){
        $this->idEjercicio = $idEjercicio;
        return $this;
    }
    
    public function setNombreEjercicio($nombreEjercicio){
        $this->nombreEjercicio = $nombreEjercicio;
        return $this;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
        return $this;
    }

    public function setIdTipoEjercicio($idTipoEjercicio){
        $this->idTipoEjercicio = $idTipoEjercicio;
        return $this;
    }

    public function setImagen($imagen){
        $this->imagen = $imagen;
        return $this;
    }

    public function setVideo($video){
        $this->video = $video;
        return $this;
    }
}
?>