
  <?php
    include('../components/header.html');
   
  ?>

<div class="container row-col-12 bg-light" style="height: 55rem;" id="form-registro">
  <div class="pt-4">
<div class="card text-white border border-success mx-auto " id="card-inresar-user" style="max-width: 30rem;">
  <div class="card-header bg-success">Registro</div>
  <div class="card-body text-dark">

    <form method="POST" action="../../libs/registrar-user.php" name="registro"class="login-form validate-form">
    
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" name="nombreUser" id="exampleInputNombre1" required>
      </div>

      

      <div class="form-group">
        <label for="exampleInputEmail1">Número Teléfonico</label>
        <input type="number" name="numeroTel" class="form-control" id="exampleInputPhone1" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Correo</label>
        <input type="email" name="correoUser" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Confirma correo</label>
        <input type="email" class="form-control" name="correoUserConfirm" id="exampleInputUsuario1" required>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" name="passUser" class="form-control" id="exampleInputPassword1" required>
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Confirma Contraseña</label>
        <input type="password" name="passUserConfirm" class="form-control" id="exampleInputPassword2" required>
      </div>
      <!--Ir hacia atras al inicio-->
    
          <button class="btn btn-outline-danger ml-1 my-2 my-sm-0" type="submit" name="registro">
          <i class="bi bi-chevron-left"></i>

         Inicio
         <?php header('Location: ../index.php');?>
          </button>
        


   
          <button name="registro"  class="btn btn-outline-primary ml-1 my-2 my-sm-0 float-right" type="submit">
          <i class="bi bi-arrow-up-square"></i>
          Registrarme
          </button>
    

        
    </form> 
  </div>
</div>
<br>

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






