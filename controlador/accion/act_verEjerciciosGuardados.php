<?php
    
    require_once (__DIR__."/../mdb/mdbEjercicio.php");

    $ejercicios = verEjerciciosGuardados();
            

    echo json_encode($ejercicios);