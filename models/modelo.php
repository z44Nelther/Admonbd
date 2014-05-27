<?php
class Modelo extends Conexion {

function Modelo() {
        parent::Conexion();
    }
	
public function consulta_datos() {
	echo "Consultando";
	echo "".$c;
	$stid = oci_parse($this->c, 'SELECT * FROM' . $this->nombre_tabla);
	echo "Consultando-Select";
	$rs=oci_execute($stid);
	return $rs;
}

}
?>