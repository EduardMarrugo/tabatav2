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
        <div class="container ">
            <div class="rounded-3 text-center">
                <div class="row">
                    <div class="col">
                        <div class="card" style="margin-top: 100px; margin-bottom: 100px; width: 24rem">

                            <div class="card-body">

                                <center>
                                    <h1 class="display-5 fw-bold" id="Title"></h1>
                                </center>

                                <ul class="list-group">

                                </ul>

                                <center>
                                    <h3>Tiempo total</h3>
                                    <div id="tiempoT">

                                    </div>
                                </center>


                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style=" width: 40rem;">
                            <img src="" alt="" id="imagenejercicio" class="card-img-top img ">

                            <div class="card-body">

                                <center>
                                    <h1 class="display-5 fw-bold" id="Title"></h1>
                                </center>

                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the
                                    card's content.</p> -->

                                <center>
                                    <h1 class="display-5 fw-bold" id="tiempoDe">JUST DO IT!!</h1>
                                    <h1 class="display-5 fw-bold" id="TT"></h1>
                                </center>

                                <center>
                                    <a href="#" class="btn button">
                                        <h4 id="iniciarTiempo">
                                            Iniciar
                                        </h4>
                                    </a>
                                    <a href="#" class="btn button">
                                        <h4 id="pararTiempo">
                                            Pausar
                                        </h4>
                                    </a>
                                    <a class="btn button" href="../vista/tabatas.php">
                                        <h4>
                                            Ejercicios
                                        </h4>
                                    </a>
                                    <a class="btn button" href="../vista/tabatas.php">
                                        <h4>
                                            Volver
                                        </h4>
                                    </a>

                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h1 class="display-5 fw-bold" id="Title"></h1>
                </div>


            </div>
            <!-- <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div>
                    <h1 class="display-5 fw-bold" id="TT"></h1>
                </div>
                <div>
                    <h1 class="display-5 fw-bold" id="tiempoDe">JUST DO IT!!</h1>
                </div>
            </div>
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div>
                    <img src="" alt="" id="imagenejercicio">
                </div>
            </div> -->
        </div>
    </header>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="../vista/js/logica/verTabata.js"></script>
    <!-- <script src="../vista/js/logica/tabata.js"></script> -->
</body>

</html>

<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans');

.button,
.card-text,
card-title {
    font-family: 'Open Sans', sans-serif;
}

.card {
    margin: auto;
    width: 30rem;
    border-top-right-radius: 10px 10px;
    border-top-left-radius: 50px 50px;
    border-bottom-left-radius: 5px 5px;
    border-bottom-right-radius: 50px 50px;
    box-shadow: 2px 2px 15px 2px #ccc;
}

.img {
    border-top-right-radius: 5px 5px;
    border-top-left-radius: 50px 50px;
   
}

.button {
    padding: 20px;
    margin: 5px;
    transition: 0.8s ease;
    background-color: #0082FE;
    color: #fff;
    font-size: 14px;
    border-radius: 2rem;
}

.button:hover {
    transition: 0.8s ease;
    border-color: #0082FE;
    background-color: #fff;
    color: #0082FE;
    font-size: 14px;
}

.list-group-item {
    border: 0px;
}
</style>