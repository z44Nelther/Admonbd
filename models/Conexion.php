<?php
	
class Conexion {
	private $c;
	
		function Conexion(){
			$this->c = oci_pconnect("prac51","prac51","127.0.0.1/admonbd2");
			echo "".$this->c; 
				  //$c = ocilogon("prac51","prac51","admonbd2")
		if (!$c) {
			echo "error con la conexion";	   
		}
	}
	
	function get_c(){
		return $this->c;
	} 
}
?>