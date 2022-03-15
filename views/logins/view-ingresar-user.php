<?php

include('views/components/header.php');

include('views/components/navegador.php');

?>

<!---->
<?php if(isset($_SESSION['mensajeAvizo']) && !empty($_SESSION['mensajeAvizo'])){ ?>
<div class="col-11 bg-<?= $_SESSION['mensajeAvizo'][1] ?>  mb-3 rounded container">
  <p class="font-weight-normal p-4 text-white h3">
 <?= $_SESSION['mensajeAvizo'][0] ?>
</p>
</div>
<?php $_SESSION["mensajeAvizo"] ="";}?>
<!--un mensaje cuando se active el correo-->
<div class="container row-col-12 " style="height: 35rem;" id="form-ingresar">
  <div class="pt-4">
<div class="card text-white border border-success mx-auto " id="card-inresar-user" style="max-width: 20rem;">
  <div class="card-header bg-success">Ingresa</div>
  <div class="card-body text-dark">
  <form id="form-ingresar-user"   method="post" action="index.php?c=formularios&a=ingresar" class="login-form validate-form">
      <div class="form-group">
        <label for="exampleInputEmail1">Correo Electronico</label>
        <input type="mail" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Ingresa un correo ya registrado(somos una empresa seria no compartiremos tu información) </small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="pass" name="pass">
      </div>
      <a href="../../index.php?c=user&a=registrar">¿No te has registrado?</a>
      <br>
           <button type="submit" name="ingresar" class="btn btn-primary">Entrar</button>
    </form> 
  </div>
</div>
</div>
</div>

<br><br><br><br><br><br><br><br>
<?php
include('views/components/footer.php');
?>