<?php
class Modelo extends Conexion {

function Modelo() {
        parent::Conexion();
    }
    
	public function consulta_datos() {
        $rs = $this->db->Execute('SELECT * from ' . $this->nombre_tabla);
        echo "HOLA";
        $this->get_error($rs, 'Error en consulta datos');
        return $rs;
    }
    
     public function consulta_sql($sql) {
        $rs = $this->db->Execute($sql);
        
        return $rs;
        }
    
        public function inserta($rs) {
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla, $rs);
        return $this->get_error($this->db->Execute($sql_insert), 'Error en Modelo.inserta');
        }
}
    
?>