<?php
    class Usuario extends Modelo{
	public $nombre_tabla = 'usuario';
    public $pk = 'id_usuario';
    public $er;
    
public $atributos = array(
		'nom_usuario'=>array(),
		'ap_pat'=>array(),
		'ap_mat'=>array(),
		'correo'=>array(),
		'alias'=>array(),
        'password'=>array(),
  );

public $errores = array( );

private $alias
private $email;
private $password;
private $ap_pat;
private $ap_mat;
private $nom_usuario;

function Usuario (){
	parent :: Modelo();

}

    public function get_atributos(){
            $rs = array();
            foreach ($this->atributos as $key => $value) {
                $rs[$key]=$this->$key;
            }
            return $rs;
        }


    public  function get_nomusuario(){
        return $->$nom_usuario;
    }
    public function set_nomusuario(){
        $er = new er ();
        if($er->username($valor)==true){
            $this->nom_usuario = trim($valor);
            return true;
        }else{
         $this->nom_usuario = trim($valor);
         return false;   
        }
    }


    public  function get_appat(){
        return $->$ap_pat;
    }
    public function set_appat(){
        $er = new er ();
        if($er->username($valor)==true){
            $this->ap_pat = trim($valor);
            return true;
        }else{
         $this->ap_pat = trim($valor);
         return false;   
        }
    }
    public  function get_apmat(){
        return $->$ap_mat;
    }
    public function set_apmat(){
        $er = new er ();
        if($er->username($valor)==true){
            $this->ap_mat = trim($valor);
            return true;
        }else{
         $this->ap_mat = trim($valor);
         return false;   
        }
    }

    public function get_alias(){
            return $this->alias;
        } 
    public function set_alias($valor){
         $er = new er ();

        if($er->username($valor)==true){

            $rs = $this->consulta_sql("select * from usuario where alias = '$valor'");
            $rows = $rs->GetArray();

            if(count($rows) > 0){
             $this->alias = trim($valor);

                $this->errores[] = "Este alias (".$valor.") ya esta registrado"; 
            }else{
                $this->alias = trim($valor);
                return true;
            }
           }else{
            $this->errores[] = "alias no valido"; 
            $this->alias = trim($valor);
            return false;
           }
        }
        
    public function get_email(){
            return $this->email;
        } 
    public function set_email($valor){
            $er = new er ();
            if($er->email($valor)==true){
              $this->email = trim($valor);
              return true;
            }else{
             $this->errores[] = "e-mail no valido"; 
            return false;
            }
        }
    public function get_password(){
            return $this->password;
        } 
    public function set_password($valor){
            $er = new er ();
            if($er->pass($valor)==true){
            $this->password = trim($valor);
            return true;
            }else{
                 $this->errores[] = "Contraseña no valida"; 
            }
        }
   
}

    
?>