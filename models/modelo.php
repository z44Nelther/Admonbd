<?php
class Modelo extends Conexion {

function Modelo() {
        parent::Conexion();
    }
    
	public function consulta_datos() {
        $rs = $this->db->Execute('SELECT * from ' . $this->nombre_tabla .';');
        //$this->get_error($rs, 'Error en consulta datos');
        return $rs;
    }
}
    
?>