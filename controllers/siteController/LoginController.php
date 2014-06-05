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
        	print_r($datos);
        	if(count($rows) > 0){
        		if ($rows[0]['6']== $datos['password']) {
        		
        		echo "INICIANDO :D";

        			$this->iniciarSesion($rows['0']['5'],$rows['0']['5']);echo "INICIANDO :D";
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