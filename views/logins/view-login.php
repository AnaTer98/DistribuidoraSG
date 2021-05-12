
  <?php
    include('../components/header.html');
   
  ?>




<div class="card text-white border-success mx-auto mb-3" style="max-width: 20rem;">
  <div class="card-header bg-success">Registrate</div>
  <div class="card-body text-dark">
  <form class="login-form validate-form"id="formLogin" action="/DistribuidoraSG/libs/registro-user.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="nombreUser" id="inputNombre" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Ingresa tu nombre real !</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo:</label>
    <input type="email" class="form-control" name="correo" id="inputCorreo" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Ingresa un correo valido !</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña:</label>
    <input type="password" class="form-control" name="passwords" id="inputContrasena">
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Numero Telefonico:</label>
    <input type="number" class="form-control" name="number" id="inputNumero">
  </div>
  
 
  <button name="registro" type="submit" id="boton" class="btn btn-primary">Resgistrarme</button>
  <br>
  <a href="#">¿Ya estas registrado?</a>
</form>

  
</div>

<script>

  const stylesCss = document.getElementById('stylesCSS');
  stylesCss.setAttribute('href','../index.css');

 
</script>


<?php
  include('../components/footer.html');
?>


<!--<script src="./login-ajax.js"></script>-->






