<?php session_start();
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/modelo.php');
      include ('../../models/JobsTest.php');
      include ('../../models/Usuario.php');
      include ('../../controllers/siteController/LoginController.php');
      include ('../../libs/er.php');
      include ('../layouts/header.php');

  $usr = new Usuario();

if (isset($_POST["username"])){
    if($usr->set_nomusuario($_POST["username"])){
		  $aux=" has-success";
		}else{
		$aux=" has-error";
		}
    if($usr->set_alias($_POST["nombre"])){
		  $aux1=" has-success";
		}else{
		$aux1=" has-error";
		}
    if($usr->set_appat($_POST["appat"])){
		  $aux2=" has-success";
		}else{
		$aux2=" has-error";
		}
     if($usr->set_apmat($_POST["apmat"])){
		  $aux3=" has-success";
		}else{
		$aux3=" has-error";
		}
    if($usr->set_email($_POST["email"])){
		  $aux4=" has-success";
		}else{
		$aux4=" has-error";
		}
    if($usr->set_password($_POST["password"])){
		  $aux5=" has-success";
		}else{
		$aux5=" has-error";
		}
    if(count($aux->errores)>0){

		}else{
		if($aux->inserta($exm->get_atributos())){
		echo " OK ";
		}else{

		}
		}
}



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
					<div class="form-group <? echo $aux;?>">
						<label for="Altura">Username: </label>
						<input class="form-control" name="username" type="text" value="">
						
						
					</div>
					<div class="form-group  <? echo $aux1;?>">
						<label for="Altura">Nombre: </label>
						<input class="form-control" name="nombre" type="text" value="">
						
						
					</div>
					<div class="form-group  <? echo $aux2;?>">
						<label for="Altura">Apellido Paterno: </label>
						<input class="form-control" name="appat" type="text" value="">
						
						
					</div>
					<div class="form-group <? echo $aux3;?>">
						<label for="Altura">Apellido Materno: </label>
						<input class="form-control" name="apmat" type="text" value="">
						
						
					</div>



					<div class="form-group <? echo $aux4;?>">
						<label for="Altura">Email: </label>
						<input class="form-control" name="email" type="text" value="">

					</div>
					<div class="form-group <? echo $aux5;?>">
						<label for="Altura">Password: </label>
						<input type="password" class="form-control" name="password" type="text"                           value="">

					</div>
					<div class="col-md-offset-8">
					<input id="boton" class="btn btn-primary btn-lg " type="submit"                                    value="Registrar">
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div>

</div>