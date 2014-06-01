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
			<h1 class="text-left proxE">Lista de equipos</h1>
		</div>
		<table class="table table-striped">
			<thead class="theader" >
				<th class="text-center">Nombre Equipo</th>
                <th class="text-center">Victorias</th>
                <th class="text-center">Derrotas</th>
				<th class="text-center">Unirse</th>
             </thead>
  				<tr>
                	<td>Nalgónman</td>
                    <td>55</td>
                    <td>0</td>
                    <td><input type="submit" value="Elegir equipo" class="btn btn-primary"/></td>
                </tr>
                <tr>
                	<td>Grifindor</td>
                    <td>30</td>
                    <td>20</td>
                    <td><input type="submit" value="Elegir equipo" class="btn btn-primary"/></td>
                </tr>
                <tr>
                	<td>Makalakaka</td>
                    <td>23</td>
                    <td>50</td>
                    <td><input type="submit" value="Elegir equipo" class="btn btn-primary"/></td>
                </tr>
			</table>
			
			<?php
			    
             $rs=$JTest->consulta_datos();
             foreach($rs as $row){}
			 
			 ?>
		
		</div>
		<div class="col-md-3 comienza col-md-offset-1">
			<p>hola mundo</p>
		</div>
	</div>
</div>



