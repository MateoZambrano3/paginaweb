<?php
// Incluir la conexión
require_once("../config/conexion.php");

if(isset($_POST["enviar"]) and $_POST["enviar"] == "si"){
    require_once("../models/Usuario.php");
    $usuario=new Usuario();
    $usuario->login();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <?php require_once("modulos/css.php"); ?> 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in para iniciar tu sesión</p>

      <!-- El formulario ahora envía los datos al propio archivo login.php -->
      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="correo" id="correo" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recuerdame
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="hidden" name="enviar" value="si">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php
if (isset($_GET["m"])) {
    switch ($_GET["m"]) {
        case "1":
            ?>
            <div class="alert alert-danger" role="alert">
                Los datos ingresados son incorrectos!
            </div>
            <?php
            break;
        case "2":
            ?>
            <div class="alert alert-warning" role="alert">
                El formulario tiene los campos vacíos!
            </div>
            <?php
            break;
    }
}
?>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in usando Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in usando Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Olvidar Contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrar usuario nuevo</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<?php require_once("modulos/js.php"); ?>  
</body>
</html>
