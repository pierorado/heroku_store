<?php 

 	require ("conexion.php");
 	if (!empty($_POST)) {
 		# code...
 	
 	$usuarios=$_POST['user'];
	$contra=$_POST['pass'];
 	$resultado=mysqli_query($conexion,"SELECT * from usuarios WHERE usuario='$usuarios' AND clave='$contra'");
 	
 	$fila=mysqli_num_rows($resultado);
 	if ($fila > 0 ) {
 		header('location:mantenimiento.php');
 	}else{
 			$error = "incorrecto o falta completar";
 	}
 	}
 
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login-Usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
.contenedor{
	margin: 70px auto;
	width: 300px;
	height: 400px;
	padding: 0px 9px 0px 9px;
	background-color: #F3EDED;
	
	
}
</style>
</head>
<body>
	<div class="contenedor">

<form method="post"  class="form-group" autocomplete="off" >
	<H1>LOGIN</H1>
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="user" required >
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="pass" required>
  </div>
  
  <button type="submit" class="btn btn-primary">INGRESAR</button>
  <button type="reset" class="btn btn-primary">RESET</button>
</form>
 <br>
 <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
	</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>