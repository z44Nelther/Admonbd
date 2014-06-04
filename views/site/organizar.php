<?php session_start();
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
			<h1 class="text-left proxE">Organizar</h1>
		</div>
        
        <form>
		Nombre del torneo<input type="email" class="form-control" id="inputEmail3" placeholder="Escriba el nombre">
        </form>
        <br/>
    	<form class="form-inline">
        Tipo<select class="form-control" style="width:auto;">
        		<option>Individual</option>
                <option>Equipo</option>
    		  </select>
    	Cantidad máxima de participantes<select class="form-control" id="inputEmail3" style="width:auto;">
        									<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
        								</select>
			</form>
			
           Presencial<input type="checkbox" id="checar"/>
           
           <script>
		   
		  		var checa = document.getElementById("checar");
				var param ;
				if(checa==true) param=disable; alert("holas");
				else param=enable
				
				
				<?php
				echo "<fieldset ";
				?>
				param
				<?php
				echo " >";
            	?>

           </script>
			
            
           <form class="form-inline">
      			<label>Sede </label><input type="text" class="form-control" placeholder="Nombre de la sede" style="width:auto;"/>
      			<label >Ciudad </label><input type="text" class="form-control" placeholder="Nombre ciudad" style="width:auto;"/>
            </form>
            <br/>
                <form class="form-horizontal">
              	  <div class="form-group">
    			  <label for="inputEmail3" class="col-sm-2 control-label">Costo</label>
                  <div class="col-sm-10" style="left:200;">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Precio $" style="width:100px;" >
			      </div>
			      </div>
                </form>
           </fieldset>
           </form>
        </form>
        
        
        

		</div>
		<div class="col-md-3 comienza col-md-offset-1">
			<p>hola mundo</p>
		</div>
	</div>
</div>



