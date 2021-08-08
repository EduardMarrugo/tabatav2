  
<?php

session_start();


require_once(__DIR__."/../mdb/mdbTabata.php");
require_once(__DIR__."/../../modelo/entidad/Tabata.php");

    $nombreTabata = $_POST["nombreTabataG"];
    $tPreparacion = $_POST["tPreparacionG"];
    $tActividad = $_POST["tActividadG"];
    $tDescanso = $_POST["tDescansoG"];
    $numSeries = $_POST["numSeriesG"];
    $numRondas = $_POST["numRondasG"];
    $idUsuario = $_SESSION["ID_USUARIO"];

    $tabata = new Tabata(NULL,$nombreTabata, $tPreparacion, $tActividad, $tDescanso, $numSeries, $numRondas, $idUsuario);

    $id = guardarTabata($tabata);

    echo json_encode($id);

    header("Location: ../../vista/tabatas.php");