<?php

class EjercicioXTabata{
    private $idTabata;
    private $idEjercicio;

    //Constructor
    public function __construct($idTabata, $idEjercicio){
        $this->idTabata = $idTabata;
        $this->idEjercicio = $idEjercicio;
    
    }
    //Metodo GETS
    public function getIdTabata(){
        return $this->idTabata;
    }
    
    public function getIdEjercicio(){
        return $this->idEjercicio;
    }

    //METODO SETS
    public function setIdTabata($idTabata){
        $this->idTabata = $idTabata;
        return $this;
    }

    public function setIdEjercicio($idEjercicio){
        $this->idEjercicio = $idEjercicio;
        return $this;
    }
}
?>