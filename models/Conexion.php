<?php
    error_reporting(E_ALL|E_STRICT);
    ini_set('display_errors', 'On');
    oci_internal_debug(1);
   
class Conexion {
        function Conexion(){
            $this->db=ADONewConnection('oci8');
            $this->db->debug=true;
            $this->Connect('admonbd2','ProyectoAdmin','proyecto');
        }
    }
?>