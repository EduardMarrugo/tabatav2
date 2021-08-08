<?php

class Tabata{
    public $idTabata;
    public $nombreTabata;
    public $tPreparacion;
    public $tActividad;
    public $tDescanso;
    public $numSeries;
    public $numRondas;
    public $idUsuario;

    //Constructor
    public function __construct($idTabata, $nombreTabata, $tPreparacion, $tActividad,$tDescanso, $numSeries, $numRondas, $idUsuario){

        $this->idTabata = $idTabata;
        $this->nombreTabata = $nombreTabata;
		$this->tPreparacion = $tPreparacion;
		$this->tActividad = $tActividad;
        $this->tDescanso = $tDescanso;
		$this->numSeries = $numSeries;
        $this->numRondas = $numRondas;
        $this->idUsuario = $idUsuario;
    }

    //metodos GETS
    public function getIdTabata(){
        return $this->idTabata;
    }

    public function getNombreTabata() {
        return $this->nombreTabata;
    }

    public function getTPreparacion(){
        return $this->tPreparacion;
    }
    
     public function getTActividad(){
        return $this->tActividad;
    }

	 public function getTDescanso(){
        return $this->tDescanso;
    }

    public function getNumSeries(){
        return $this->numSeries;
    }

    public function getNumRondas(){
        return $this->numRondas;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

   //metodos SETS
   public function setIdTabata($idTabata){
       $this->idTabata = $idTabata;
       return $this;
   }

   public function setNombreTabata($nombreTabata){
       $this->nombre = $nombreTabata;
       return $this;
   }

   public function setTPreparacion($tPreparacion) {
       $this->tPreparacion = $tPreparacion;
       return $this;
   }

   public function setTActividad($tActividad){
       $this->tActividad = $tActividad;
       return $this;
   }

   public function setTDescanso($tDescanso) {
       $this->tDescanso = $tDescanso;
       return $this;
   }

   public function setNumSeries($numSeries){
       $this->numSeries = $numSeries;
       return $this;
   }

   public function setNumRondas($numRondas){
       $this->numRondas = $numRondas;
       return $this;
   }

   public function setIdUsuario($idUsuario) {
       $this->idUsuario = $idUsuario;
       return $this;
   }

}
