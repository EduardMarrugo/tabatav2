<?php
    require_once(__DIR__."/../../modelo/dao/EjercicioDAO.php");

    function verEjerciciosGuardados(){
        $dao=  new EjercicioDAO();

        $ejercicio = $dao->verEjerciciosGuardados();


        return $ejercicio;
    }
