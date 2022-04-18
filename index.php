<?php
/*require 'conexion.php';
$valido = false;
if (isset($_POST['aceptar'])) {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    if (!valida_usuario_bd($usuario, $contrasena, $conexion)) {
        #echo 'No es valido <br/>';
        $valido = false;
    } else {
        #echo 'Es valido <br/>';
        session_start();
        $_SESSION['matricula'] = $usuario;
        $valido = true;
        header('Location: index.php');

        //$datos = retornar_datos_usuario($usuario, $contrasena, $conexion);

    }
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
	<title>Login - Siiupv</title>
</head>
<body style="background-image: './css/images/fondoupv.png'">
	<div class="container">
	    <div class="frame">
	        <div class="nav">
	            <li class="signin-active">
	            	<div class="centrar">
	            		Sistema Integral de Información Universidad Politécnica de Victoria
	            	</div>
	            </li>
	        </div>
	        <div ng-app ng-init="checked = false">
	            <form class="form-signin" action="dashboard.php<?php /*echo htmlspecialchars($_SERVER['PHP_SELF']) */?>" method="post" name="form">
				<label for="username">Usuario</label> <input class="form-styling" type="text" name="username" placeholder="" />
				<label for="password">Contraseña</label> <input class="form-styling" type="password" name="password" placeholder="" />
	                <div class="btn-animate"> <input class="btn-signin" type="submit" name="aceptar" value="Iniciar Sesión">

						<?php
						/*if (!$valido && isset($_POST['aceptar'])) {
							echo '<p class="alerta" >Usuario no valido</p>';
						}*/
						?>
						
						
					</div>
	            </form>
	            <form class="form-signup" action="" method="post" name="form"> <label for="fullname">Full name</label> <input class="form-styling" type="text" name="fullname" placeholder="" /> <label for="email">Email</label> <input class="form-styling" type="text" name="email" placeholder="" /> <label for="password">Password</label> <input class="form-styling" type="text" name="password" placeholder="" /> <label for="confirmpassword">Confirm password</label> <input class="form-styling" type="text" name="confirmpassword" placeholder="" /></form>
	            <div class="success"> <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
	                    
	            </div>
	        </div>
	        <div class="forgot"> <!--a href="#"-->Recuperar contraseña</a> </div>
	    </div> 
	</div>

</body>
</html>