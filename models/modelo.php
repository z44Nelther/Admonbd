<?php
class Modelo extends Conexion {

function Modelo() {
        parent::Conexion();
    }
	
public function consulta_datos() {
	$stid = oci_parse($c, 'SELECT * FROM' . $this->nombre_tabla);
	$rs=oci_execute($stid);
	return $rs;
}

}
?>