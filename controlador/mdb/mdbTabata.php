<?php
    require_once(__DIR__."/../../modelo/dao/TabataDAO.php");

    function guardarTabata(Tabata $tabata){
        $dao =  new TabataDAO();

        $tabata = $dao->guardarTabata($tabata);

        return $tabata;

    }

    function verTabatasGuardadas($idUsuarios){
        $dao =  new TabataDAO();

        $tabatas = $dao->verTabatasGuardadas($idUsuarios);


        return $tabatas;
    }

    function editarTabata($tabata){
        $dao = new TabataDAO();
        $dao->editarTabata($tabata);
    }