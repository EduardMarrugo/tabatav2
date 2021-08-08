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
    <script src="js/librerias/jquery-3.3.1.min.js"></script>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="../vista/tabata.php">Tabata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="../vista/tabata.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../controlador/accion/act_signout.php">Cerrar
                            Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <!-- <div class="p-4 p-lg-5 bg-light rounded-3 text-center">

                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">Tabatas Guardadas</h1>
                </div>

            </div> -->
            <div class="row">
                <div class="col-6">
                    <a href="../vista/crear_tabata.php"> <button class="btn btn-primary">AGREGAR TABATA +</button> </a>

                </div>
            </div>
            <div id="tabla" />

        </div>
        <div id="form_edit"/>

       <div id="form_agg"/>

        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Tabata</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-signin" method="post" action="../controlador/accion/act_editarTabatas.php">
                            <label for="idTabata" class="sr-only">idTabata</label>
                            <input name="idTabata" type="number" id="idTabata" readonly class="form-control" autofocus>

                            <label for="nombreTabata" class="sr-only mt-2">nombreTabata</label>
                            <input name="nombreTabata" type="text" id="nombreTabata" class="form-control "
                                placeholder="Nombre para la tabata" autofocus>

                            <label for="tPreparacion" class="sr-only mt-2">tPreparacion</label>
                            <input name="tPreparacion" type="number" min="1" max="5" id="tPreparacion"
                                class="form-control " placeholder="Tiempo de preparacion" autofocus>

                            <label for="tActividad" class="sr-only mt-2">tActividad</label>
                            <input name="tActividad" type="number" min="1" max="60" id="tActividad"
                                class="form-control " placeholder="Tiempo de actividad">

                            <label for="tDescanso" class="sr-only mt-2">tDescanso</label>
                            <input name="tDescanso" min="1" max="60" type="number" id="tDescanso" class="form-control "
                                placeholder="Tiempo de descanso">

                            <label for="numSeries" class="sr-only mt-2">numSeries</label>
                            <input name="numSeries" value="8" readonly type="number" id="numSeries"
                                class="form-control " placeholder="Cantidad de series">

                            <label for="numRondas" class="sr-only mt-2">numRondas</label>
                            <input name="numRondas" type="number" min="1" max="20" id="numRondas" class="form-control "
                                placeholder="Cantidad de rondas">

                            <div class="checkbox mb-3">
                            </div>

                            <button class="btn btn-lg btn-primary" type="submit">
                                Guardar
                            </button>
                            <button type="button" class="btn btn-lg btn-secondary btn-block" data-bs-dismiss="modal">
                                Close
                            </button>


                        </form>
                    </div>

                </div>
            </div>
        </div> -->
    </header>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="../vista/js/logica/tabatasGuardadas.js"></script>
</body>

</html>