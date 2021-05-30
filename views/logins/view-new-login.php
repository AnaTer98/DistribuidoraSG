
  <?php
    include('../components/header.html');
   
  ?>

<div class="container row-col-12 bg-light" style="height: 50rem;" id="form-registro">
  <div class="pt-4">
<div class="card text-white border border-success mx-auto " id="card-inresar-user" style="max-width: 30rem;">
  <div class="card-header bg-success">Registro</div>
  <div class="card-body text-dark">
    <form id="form-registro-user" class="login-form validate-form">
    
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="nombre" class="form-control" id="exampleInputNombre1">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Empresa</label>
        <input type="empresa" class="form-control" id="exampleInputEmpresa1">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Número Teléfonico</label>
        <input type="tel" class="form-control" id="exampleInputPhone1">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Ususario</label>
        <input type="usuario" class="form-control" id="exampleInputUsuario1">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Ingresa nuevamente contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword2">
      </div>
      
      <br>
           <button type="submit" name="registro" class="btn btn-primary">Envíar</button>
    </form> 
  </div>
</div>
</div>
</div>




<script>

  const stylesCss = document.getElementById('stylesCSS');
  stylesCss.setAttribute('href','../index.css');

 
</script>
<script>
const nombre = document.getElementById('inputNombre');
const correo = document.getElementById('inputCorreo');
const pass = document.getElementById('inputContrasena');

</script>


<?php
  include('../components/footer.html');
?>


<!--<script src="./login-ajax.js"></script>-->






