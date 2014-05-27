<?php
    class Conexion {
        function Conexion(){
            $this->db=ADONewConnection('oci8');
            $this->db->debug=true;
            $this->Connect('admonbd2','ProyectoAdmin','proyecto');
        }
    }
?>