<?php
    //Con session_start() se puede iniciar una nueva sesión 
    //o reanudar la sesión existente
    session_start();

    //Con require_once se incluye el archivo mdbUsuario.php
    require_once (__DIR__."/../mdb/mdbUsuario.php");
        
        //Se obtiene el correo y password del formulario del login,
        //los datos son recibidos por el método POST
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        //Se llama a la funcion autenticarUsuario() que esta en mdbUsuario.php
        $user = autenticarUsuario($correo, $password);
        
        if($user != null){
            //Si el usuario fue encontrado, se guarda su ID en una sesión con $_SESSION
            $_SESSION['ID_USUARIO'] = $user->getId();
            $_SESSION['NOMBRE_USUARIO'] = $user->getNombre();

            if(isset($_SESSION['ID_USUARIO'])){
                header("Location: ../../vista/tabatas.php");
            }
            else{
                header("Location: ../../vista/login.php");
            }
            
            // if($user->esAdministrador() == 1){
            //     header("Location: ../../vista/administradorUsuarios.php");                
            // }else{
            //     header("Location: ../../vista/tabata.php");
            // }

        }else{
            header("Location: ../../vista/login.php");
             echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo "<script>  
           console.log('manco');</script>";
            //Si el usuario no existe se vuelve a mostrar el login                
            //
        }
