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
				<th class="text-center"># de Equipos</th>
				<th class="text-center">Pais</th>			
			</thead>
			
			<?php
			    
                print_r($JTest->consulta_datos());
            
			?>
        
          
			<!--
				<tr>
					<td>26/05/2014</td>
					<td>5GTV</td>
					<td>32</td>
					<td>Mexico</td>
				</tr>
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



