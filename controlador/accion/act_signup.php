<?php
//incluimos el archivo mbUsuario
require_once(__DIR__ . "/../mdb/mdbUsuario.php");

//Con el motodo $_POST recibimos los datos

if ($_POST['nombre'] and $_POST['correo'] and $_POST['password'] and $_POST['telefono'] and $_POST['fechaNac'] and $_POST['sexo'] and $_POST['peso']) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $fechaNac = $_POST['fechaNac'];
    $sexo = $_POST['sexo'];
    $peso = $_POST['peso'];

    $usuario = new Usuario(null, $nombre, $correo, $password, $telefono, $fechaNac, $sexo, $peso, 0);
    //Se registra

    $user = registrarUsuario($usuario);
    if ($user != null) {
        echo '<script type="text/javascript">
        alert("Registro Exitoso");
    
        </script>';

        session_start();

        //Con require_once se incluye el archivo mdbUsuario.php
        require_once(__DIR__ . "/../mdb/mdbUsuario.php");
        $user_login = autenticarUsuario($correo, $password);

        $_SESSION['ID_USUARIO'] = $user_login->getId();
        $_SESSION['NOMBRE_USUARIO'] = $user_login->getNombre();

        if (isset($_SESSION['ID_USUARIO'])) {
            header("Location: ../../vista/tabata.php");
        } else {
            header("Location: ../../vista/login.php");
        }

       
    } else {
        header("Location: ../../vista/login.php");
        echo '<script type="text/javascript">
            alert("No se pudo registrar");
        </script>';
    }
} else {
    echo '<script type="text/javascript">
    alert("Registro Fallido");
    </script>';

    header("Location: ../../vista/signup.php");
}
