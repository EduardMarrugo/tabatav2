<?php
    
    session_start();
    require_once (__DIR__.'/../mdb/mdbTabata.php');
    

    echo "<script>console.log('Debug Objects: " . $_POST['idTabata'] . "' );</script>";
    
    $id = $_POST['idTabata'];
   
    eliminarTabata($id);

    header("Location: ../../vista/tabatas.php");
?>