<?php
    class Usuario extends Modelo{
	public $nombre_tabla = 'Equipo';
    public $pk = 'id_equipo';
    public $er;
        
    public $atributos = array(
		'nom_equipo'=>array(),
		'victorias'=>array(),
		'derrotas'=>array(),
		'id_usuario'=>array(),
  );

 public $errores = array( );
        
        private $nom_equipo;
        private $victorias;
        private $derrotas;
        private $id_usuario;

public function get_atributos(){
            $rs = array();
            foreach ($this->atributos as $key => $value) {
                $rs[$key]=$this->$key;
            }
            return $rs;
        }
 function Equipo(){
    	parent::Modelo();
    }
}
?>
