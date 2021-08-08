<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Register</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/EstiloRegistrar.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  
</head>

<body class="text-center" style="background-color: white; background-image: url('img/viejalogin.jpg');">

  <form class="form-signup" method="post" action="../controlador/accion/act_signup.php">
      <h1 class="h3 mb-3 font-weight-normal">Registrar</h1>
    <!-- <div class="mx-4 mt-5 my-5" style="border: grey solid; background-color: rgb(255, 255, 255);">

      <h1 class=" my-3 font-weight-normal">Register</h1>

      <div class="mb-3 row">

        <div class="row">
          <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10 mb-3">
            <input type="text" class="form-control" id="nombre" onfocus="this.value=''" value="Ingrese su nombre">
          </div>
        </div>

        <div class="row">
          <label for="correo" class="col-sm-2 col-form-label">Correo</label>
          <div class="col-sm-10 mb-3 ">
            <input type="email" class="form-control" id="correo" onfocus="this.value=''" value="Ingrese su correo">
          </div>
        </div>

        <div class="row">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10 mb-3 ">
            <input type="password" class="form-control" id="password" onfocus="this.value=''" value="contraseña">
          </div>
        </div>

        <div class="row">
          <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
          <div class="col-sm-10 mb-3">
            <input type="text" class="form-control" id="telefono" onfocus="this.value=''" value="Ingrese su telefono">
          </div>
        </div>

        <div class="row">
          <label for="fechaNac" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
          <div class="col-sm-10 mb-3 ">
            <input class="form-control" id="fechaNac" onfocus="this.value=''" value="Ingrese su fecha de nacimiento">
          </div>
        </div>

        <div class="row">
          <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
          <div class="col-sm-10 mb-3 ">
            <input type="text" class="form-control" id="sexo" onfocus="this.value=''" value="Ingrese su genero">
          </div>
        </div>

        <div class="row">
          <label for="peso" class="col-sm-2 col-form-label">Peso</label>
          <div class="col-sm-10 mb-3 ">
            <input class="form-control" id="peso" onfocus="this.value=''" value="Ingrese su peso en kilogramos (kg)">
          </div>
        </div>

      </div>
      
    </div> -->
    <label for="nombre" class="sr-only">Nombre</label>
    <input name="nombre" type="text" id="user" class="form-control" placeholder="Nombre" autofocus>
    
    <label for="correo" class="sr-only">Correo</label>
    <input name="correo" type="email" id="correo" class="form-control" placeholder="Correo" autofocus>
    
		<label for="password" class="sr-only">Contraseña</label>
		<input name="password" type="password" id="password" class="form-control" placeholder="Contraseña">

    <label for="telefono" class="sr-only">Telefono</label>
    <input name="telefono" type="tel" id="telefono" class="form-control" placeholder="Telefono" autofocus>

    <label for="fechaNac" class="sr-only">fecha Nacimiento</label>
    <input name="fechaNac" type="date" id="fechaNac" class="form-control" placeholder="Fecha Nacimiento" autofocus>

    <label for="sexo" class="sr-only">Sexo</label>
    <input name="sexo" type="text" id="sexo" class="form-control" placeholder="Sexo" autofocus>

    <label for="peso" class="sr-only">Peso</label>
    <input name="peso" type="number" id="peso" class="form-control" placeholder="Peso" autofocus>
    

		<div class="checkbox mb-3">
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit" >
			<h8>Registrar</h8>
		</button>
		<!-- <div style="width:300px; height:48px; margin: 10px 0;" class="g-signin2" data-onsuccess="onSignIn"></div> -->
		<input type="button" class="btn btn-lg btn-secondary btn-block" onclick="location.href = 'login.php'" value="Volver">
  </form>
  <script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.min.js"></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="js/librerias/sweetalert.min.js"></script>
	<script src="js/logica/login.js"></script>
  <a href="https://www.freepik.es/fotos/deporte">Foto de Deporte creado por cookie_studio - www.freepik.es</a>
</body>

</html>