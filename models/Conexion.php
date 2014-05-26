<?php
class Conexion {

	function Conexion(){
		$c = this->oci_pconnect("prac51","prac51","127.0.0.1/admonbd2");
		
		if (!$conn) {
			echo "error con la conexion";	   
		}
	}
}
?>