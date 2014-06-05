<?php session_start();
      
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/modelo.php');
      include ('../../models/Usuario.php');
      include ('../../controllers/siteController/LoginController.php');
      include ('../../libs/er.php');
     

      $login = new LoginController();
      if (isset($_POST['email'])) {
        $login->validaUsuario($_POST);
      }
      
      
      include ('../layouts/header.php');
?>

<div class="row">

  <div class="col-md-6 col-md-offset-3">
    <div class="<?php echo ($login->muestra_errores)?'alert alert-danger':''; ?> ">
      <?php 
        if ($login->muestra_errores) {
          foreach ($login->errores as $key => $value) {
            echo $value."<br>";
          }
        }
      ?>
    </div>
    <form role="form" method="POST" >
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario:</label>
        <input type="email" class="form-control" id="email" name="nom_usuario" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password:</label>
        <input type="password" class="form-control" id="password" name="password" >
      </div>

      <button type="submit" class="btn btn-default">Entrar</button>
    </form>
  </div>


</div>
<?php include ('../layouts/footer.php'); ?>