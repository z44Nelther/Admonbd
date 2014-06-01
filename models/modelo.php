<?php
class Modelo extends Conexion {

function Modelo() {
        parent::Conexion();
    }
    
	public function consulta_datos() {
        $rs = $this->db->Execute('SELECT * from ' . $this->nombre_tabla);
        echo "HOLA";
      
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
    
        public function Unir_equipo($id_user,$id_eq){
            $stmt = $this->db->PrepareSP("BEGIN UnirseEq(:a1, :a2, :a3); END;");
            $this->db->InParameter($stmt,$id_user,'a1');
            $this->db->InParameter($stmt,$id_eq,'a2');
            $this->db->OutParameter($stmt,$output,'a3');
            $ok = $this->db->Execute($stmt);
           if($ok){
               echo "CORRECTO";
           }else{
               echo "INCORRECTO";
           }
            }
        }
    
?>