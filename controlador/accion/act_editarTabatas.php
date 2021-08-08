<?php

session_start();

require_once (__DIR__.'/../mdb/mdbTabata.php');
$idTabata = $_POST['idTabata'];
$nombreTabata = $_POST['nombreTabata'];
$preparacion = $_POST['tPreparacion'];
$actividad = $_POST['tActividad'];
$descanso = $_POST['tDescanso'];
$series = $_POST['numSeries'];
$rondas = $_POST['numRondas'];
$idUsuario = $_SESSION["ID_USUARIO"];

$tabata = new Tabata($idTabata, $nombreTabata, $preparacion, $actividad, $descanso, $series, $rondas, $idUsuario);
editarTabata($tabata);

     header('Location: ../../vista/tabatas.php');
?>