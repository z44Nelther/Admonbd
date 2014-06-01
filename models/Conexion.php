<?php
    //error_reporting(E_ALL|E_STRICT);
   // ini_set('display_errors', 'On');
    //oci_internal_debug(1);
   
class Conexion {
        function Conexion(){
            $this->db=NewADOConnection("oci8");
            $this->db->debug=ture;
            $this->db->PConnect("192.168.0.10","proyectoadmin","proyecto","admonbd2");
        }
    }
?>