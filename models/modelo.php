<?php
class Modelo  {

	public $c;

function Modelo() {
        $c=oci_pconnect("prac51","prac51","127.0.0.1/admonbd2");
        if (!$c) {
			echo "error con la conexion";	   
		}


    }
	
public function consulta_datos() {
	echo "Consultando";
	
	$stid = oci_parse($c, 'SELECT * FROM' . $this->nombre_tabla);
	echo "Consultando-Select";
	$rs=oci_execute($stid);
	return $rs;
}

}
?>