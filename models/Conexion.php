<?php
    //error_reporting(E_ALL|E_STRICT);
   // ini_set('display_errors', 'On');
    //oci_internal_debug(1);
   
class Conexion {
        function Conexion(){
            $this->db=NewADOConnection("oci8");
            $this->db->debug=false;
            $this->db->Connect("localhost","proyectoadmin","proyecto","admonbd2");
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