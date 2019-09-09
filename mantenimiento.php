<!DOCTYPE html>
<html>
<head>
	<title>mantenimiento</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
.contenedor{
	margin: 70px auto;
	width: 950px;
	padding: 0px 9px 0px 9px;
	background-color: #F3EDED;
	
	
}
</style>
</head>
<body>
	<div class="contenedor">
		<div class="form-row align-items-center">
			<div class="col-sm-3 my-1">
      
      <input type="text" class="form-control" id="inlineFormInputName">
    </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
		</div>
<table class="manta table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">precio</th>
      <th scope="col">categoria</th>
      <th scope="col">stock</th>
       <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>23</td>
      <td><button type="submit" class="btn btn-primary">editar</button>
      	<button type="submit" class="btn btn-primary">eliminar</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>23</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>23</td>
    </tr>
  </tbody>
</table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
