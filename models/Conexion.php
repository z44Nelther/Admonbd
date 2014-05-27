<?php
    error_reporting(E_ALL|E_STRICT);
    init_set('display_errors', 'On');
    
    class Conexion {
        function Conexion(){
            $this->db=ADONewConnection('oci8');
            $this->db->debug=true;
            $this->Connect('admonbd2','ProyectoAdmin','proyecto');
        }
    }
?>