<?php

include('views/components/header.php');

include('views/components/navegador.php');

?>

<!---->

<div class="col-11 bg-success  mb-3 rounded container">
  <p class="font-weight-normal p-4 text-white h3">
    
  Hemos enviado un correo de verificación ha tu cuenta de correo ingresa al link que te enviamos para activar tu cuenta. :)
</p>
</div>

<!--un mensaje cuando se active el correo-->
<div class="container row-col-12 " style="height: 35rem;" id="form-ingresar">
  <div class="pt-4">
<div class="card text-white border border-success mx-auto " id="card-inresar-user" style="max-width: 20rem;">
  <div class="card-header bg-success">Ingresa</div>
  <div class="card-body text-dark">
  <form id="form-ingresar-user" method="POST" action="../../index.php?c=user&a=registrar" class="login-form validate-form">
      <div class="form-group">
        <label for="exampleInputEmail1">Correo Electronico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Ingresa un correo ya registrado(somos una empresa seria no compartiremos tu información) </small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
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

<script>

  const stylesCss = document.getElementById('stylesCSS');
  stylesCss.setAttribute('href','../index.css');
/*

 document.addEventListener('submit', function(e){
   e.preventDefault();
  Swal.fire(
  'Llena todo!',
  'You clicked the button!',
  'success'
)
});*/


</script>