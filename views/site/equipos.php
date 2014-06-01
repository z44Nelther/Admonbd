<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../layouts/header.php');
 include ('../../models/Conexion.php');
  include ('../../models/modelo.php');
  include ('../../models/Equipo.php');
  
  $Eq= new Equipo();

?>


<div class="row">
	<div class="col-md-12 text-center" id="maindiv">
		<div class="col-md-8">
		<div class="">
			<h1 class="text-left proxE">Lista de equipos</h1>
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
					    <input class="form-control transparente text-center" name="username" type="text" 
                               value="<?php echo $row['NOM_EQUIPO']; ?>" readonly>
						</div>
                     </td>   
                  </form>
                        
                        
                        
                    <td><?php echo $row['VICTORIAS']; ?></td>
                    <td><?php echo $row['DERROTAS']; ?></td>
                    <td><input type="submit" value="Elegir equipo" class="btn btn-primary btn-xs"/></td>
                    
                    
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



