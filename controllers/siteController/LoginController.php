<?php
	class LoginController extends Usuario{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Usuario();
		}
		public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuario where nom_usuario = '".$datos['nom_usuario']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== $datos['password']) {
        		
        			$this->iniciarSesion($rows['0']['nom_usuario'],$rows['0']['nom_usuario']);echo "INICIANDO :D";
        		}else{
        					echo "UPS D:";

		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}
		public function iniciarSesion($rol,$nomuser){
			$_SESSION['user'] = $rol;
			$_SESSION['nom_user'] = $nomuser;
			header("Location: inicio.php");
		}
		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}

	}


?>