<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../layouts/header.php');
include ('../../models/Conexion.php');
  include ('../../models/modelo.php');
  include ('../../models/JobsTest.php');
  
  $JTest= new JobsTest();

?>


<div class="row">
	<div class="col-md-12 text-center" id="maindiv">
		<div class="col-md-8">
		<div class="">
			<h1 class="text-left proxE">Proximos Eventos</h1>
		</div>
		<table class="table table-striped">
			<thead class="theader" >
				<th class="text-center">Fecha</th>
				<th class="text-center">Torneo</th>
                <th class="text-center">Juego</th>
				<th class="text-center">Cupo</th>
                <th class="text-center">Costo</th>
							
			</thead>
			
			<?php
			    
             $rs=$JTest->consulta_datos();

                foreach($rs as $row){
			?>
                <tr>
                    <td><?php echo $row[FECHA_INICIO]; ?></td>
                    <td><?php echo $row[NOM_TORNEO]; ?></td>
                    <td><?php echo $row[ID_JUEGO]; ?></td>
                    <td><?php echo $row[MAX_PARTICIPANTES]; ?></td>
                    <td><?php echo $row[COSTO]; ?></td>
                    
                </tr>
          <?php } ?>
			<!--
				
				<tr>
					<td>26/05/2014</td>
					<td>league of legends world championship</td>
					<td>32</td>
					<td>Corea</td>
				</tr>
				<tr>
					<td>26/05/2014</td>
					<td>Parada Competitiva Argentina</td>
					<td>32</td>
					<td>Argentina</td>
				</tr>
				-->
	
	
		</table>
		</div>
		<div class="col-md-3 comienza col-md-offset-1">
			<p>hola mundo</p>
		</div>
	</div>
</div>



