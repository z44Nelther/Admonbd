<?php
class Conexion {

	function Conexion(){
		$c = oci_pconnect("prac51","prac51","127.0.0.1/admonbd2");
		  //$c = ocilogon("prac51","prac51","admonbd2");
		if (!$c) {
			echo "error con la conexion";	   
		}
	}
}
?>