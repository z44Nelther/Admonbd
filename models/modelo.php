<?php
error_reporting(E_ALL|E_STRICT);
	ini_set('display_errors', 'On'); 
	oci_internal_debug(1);

 $c=oci_pconnect("prac51","prac51","127.0.0.1/admonbd2");
class Modelo  {

	
	
function Modelo() {
        
        if (!$this.c) {
			echo "error con la conexion";	   
		}


    }
	
public function consulta_datos() {
	echo "Consultando";
	
	$stid = oci_parse($this.c, 'SELECT * FROM' . $this->nombre_tabla);
	echo "Consultando-Select";
	$rs=oci_execute($stid);
	return $rs;
}

}
?>