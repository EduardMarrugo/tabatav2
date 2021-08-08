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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js">
    </script>

</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="../vista/tabatas.php">Tabata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="../vista/tabatas.php">Home</a></li>
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
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#AgregarModal">
                        Agregar Tabata
                    </button>

                </div>
            </div>
            <div class="table-responsive">
                <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Preparación</th>
                            <th>Actividad</th>
                            <th>Descanso</th>
                            <th>Series</th>
                            <th>Rondas</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="tabloide">

                    </tbody>
                </table>
            </div>
            <div id="tabla"></div>

        </div>


        <div id="form_edit"></div>

        <div id="form_agg"></div>


    </header>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="../vista/js/logica/tabatasGuardadas.js"></script>
</body>

</html>