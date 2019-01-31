<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/img/icon.png">

    <title>Parc Atraccions Univeylandia</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <!--<form class="form-signin" method="post" action="php/validateLogin.php">-->
    <form class="form-signin" method="post" action="">
      <img class="mb-4" src="img/logo.png" alt="" width="220" height="75">
      <h1 class="h3 mb-3 font-weight-normal">Iniciar sessió</h1>
      <label for="inputEmail" class="sr-only">Usuari</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" value="" required autofocus>
      <label for="inputPassword" class="sr-only">Contrasenya</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Contrasenya" name="password" required>
      <div class="checkbox mb-3">
        <input type="checkbox" name="remember">
        <label>Recordar usuari</label>
        <label><a href="#">Has oblidat la contrasenya?</a></label>
          <br>
        <label><a href="registre.php">No tens compte? REGISTRA'T</a></label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sessio</button>
      <button class="btn btn-md btn-secondary btn-block" type="reset" onclick="history.back()">Tornar enrere</button>
    </form>
  </body>
</html>
