<?php session_start();

  include ('../layouts/header.php');
?>
<div class="row">
	<div class="col-md-12" id="maindiv">

<div class="row container">
	<br>
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading ">
				<h3 class="panel-title Registro">Registro:</h3>
			</div>
			<div class="panel-body">
				<form  method="POST">
					<div class="form-group">
						<label for="Altura">Username: </label>
						<input class="form-control" name="username" type="text" value="">
						
						
					</div>
					<div class="form-group">
						<label for="Altura">Nombre: </label>
						<input class="form-control" name="appat" type="text" value="">
						
						
					</div>
					<div class="form-group">
						<label for="Altura">Apellido Paterno: </label>
						<input class="form-control" name="apmat" type="text" value="">
						
						
					</div>
					<div class="form-group">
						<label for="Altura">Apellido Materno: </label>
						<input class="form-control" name="username" type="text" value="">
						
						
					</div>



					<div class="form-group">
						<label for="Altura">Email: </label>
						<input class="form-control" name="email" type="text" value="">

					</div>
					<div class="form-group">
						<label for="Altura">Password: </label>
						<input class="form-control" name="password" type="text" value="">

					</div>
					<div class="col-md-offset-8">
					<input id="boton" class="btn btn-primary btn-lg " type="submit" value="Enviar">
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div>

</div>