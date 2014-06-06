<?php session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../layouts/header.php');
 include ('../../models/Conexion.php');
  include ('../../models/modelo.php');
  include ('../../models/Equipo.php');
  
  $Eq= new Equipo();
  $us = new Usuario();
if (isset($_POST["nom_eq"])) {
    
    $sql="Select id_equipo from equipo where nom_equipo='".$_POST["nom_eq"]."'";
    $sql2="Select id_usuario from equipo where nom_usuario='".$_SESSION["user"]."'";
    $r=$Eq->consulta_sql($sql);
    $r2=$us->consulta_sql($sql);
    $ro=r2->GetArray();
      foreach($r as $rw){ 
        echo " Resultado =".$rw['ID_EQUIPO']; 
          $Eq->Unir_equipo($ro[0]['ID_USUARIO'],$rw['ID_EQUIPO']);
      }
    
}
?>


<div class="row">
	<div class="col-md-12 text-center" id="maindiv">
		<div class="col-md-8">
		<div class="row">
            
            <div class="col-md-3">
			<h1 class="text-left proxE">Lista de equipos</h1>
            </div>
            
            <div class="text-left col-md-5" style="margin-top:25px;">
                <a class="btn btn-default" href="#" role="button">Crear Equipo</a>
            </div>
		</div>
		<table class="table table-striped">
			<thead class="theader" >
				<th class="text-center">Nombre Equipo</th>
                <th class="text-center">Victorias</th>
                <th class="text-center">Derrotas</th>
				<th class="text-center">Unirse</th>
             </thead>
  				<?php
			    
             $rs=$Eq->consulta_datos();
             foreach($rs as $row){ 
            ?>
             <tr> <form  method="POST">
                    <td>
					    <div class="form-group">
					    <input class="form-control input-sm"style="background-color:transparent; " name="nom_eq" 
                               type="text" value="<?php echo $row['NOM_EQUIPO']; ?>" readonly>
						</div>
                     </td>   
                 
                        
                        
                        
                    <td><?php echo $row['VICTORIAS']; ?></td>
                    <td><?php echo $row['DERROTAS']; ?></td>
                    <td><input type="submit" value="Elegir equipo" class="btn btn-primary btn-xs"/></td>
                    
                     </form>
                </tr>
            <?php }
			  
			 ?>
			</table>
			
			
		
		</div>
		<div class="col-md-3 comienza col-md-offset-1">
			<p>hola mundo</p>
		</div>
	</div>
</div>



