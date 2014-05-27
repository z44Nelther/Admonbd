<?php
class Conexion {
	error_reporting(E_ALL|E_STRICT);
	ini_set('display_errors', 'On'); 
	oci_internal_debug(1);
	
		function Conexion(){
		$c = oci_pconnect("prac51","prac51","127.0.0.1/admonbd2");
		  //$c = ocilogon("prac51","prac51","admonbd2");
		if (!$c) {
			echo "error con la conexion";	   
		}
	}
}
?>