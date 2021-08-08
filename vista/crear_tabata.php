<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/styles.css">
</head>
<body>
       <!-- Responsive navbar-->
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="../vista/tabata.php">Tabata</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../vista/tabata.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../controlador/accion/act_signout.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Crear Tabatas</h1>
                        <form class="form-signin" method="post" action="../controlador/accion/act_guardarTabata.php">
                        
                            <input name="nombreTabata" type="text" id="nombreTabata" class="form-control" placeholder="Nombre para la tabata" autofocus>

                            <input name="tPreparacion" type="number" min="1" max="5" id="tPreparacion" class="form-control" placeholder="Tiempo de preparacion" autofocus>
                            
                            <input name="tActividad" type="number" min="1" max="60" id="tActividad" class="form-control" placeholder="Tiempo de actividad" >

                            <input name="tDescanso" type="number" min="1" max="60" id="tDescanso" class="form-control" placeholder="Tiempo de descanso" >

                            <input name="numSeries" type="number" value="8" readonly id="numSeries" class="form-control" placeholder="Cantidad de series" >

                            <input name="numRondas" type="number" min="1" max="20" id="numRondas" class="form-control" placeholder="Cantidad de rondas" >

                            <div class="checkbox mb-3">
                            </div>

                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                <h8>Guardar</h8>
                            </button>
	

                        </form>


                    </div>
                </div>
            </div>
        </header>
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

<style>
    input{
        margin-top: 20px
    }
</style>
</html>