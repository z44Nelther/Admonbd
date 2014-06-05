<?php
	class LoginController extends Usuario{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Usuario();
		}
		public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuario where alias = '".$datos['nom_usuario']."'  ");
        	$rows = $rs->GetArray();
        	print_r($rows);
        	if(count($rows) > 0){
        		if ($rows[6]['password']== $datos['PASSWORD']) {
        		
        			//$this->iniciarSesion($rows['5']['alias'],$rows['5']['alias']);echo "INICIANDO :D";
        		}else{
        					echo "UPS D:";

		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este usuario no existe';
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