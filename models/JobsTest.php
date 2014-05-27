<?php
class JobsTest extends modelo{
	public $nombre_tabla = 'Torneo';
    public $pk = 'id_torneo';
    
    public $atributos= array(
    	'job_title'=>array(),
    	'min_salary'=>array(),
    	'max_salary'=>array() 
    );
    
    public $errores = array();
    
    private $job_title;
    private $min_salary;
    private $max_salary;
    
    function JobsTest(){
    	parent::Modelo();
    }
    
}
?>