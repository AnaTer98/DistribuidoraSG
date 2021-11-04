<?php
include_once('../components/header.php');

?>

<div class="container row-col-12 " style="height: 55rem;" id="form-registro">
  <div class="pt-4">
    <div class="card text-white border border-success mx-auto " id="card-inresar-user" style="max-width: 30rem;">
      <div class="card-header bg-success">Registro</div>
      <div class="card-body text-dark">
                            
      <form method="POST" action="/index.php?c=user&a=registrar" name="registro" class="login-form validate-form">

          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombreUser" id="exampleInputNombre1" >
          </div>



          <div class="form-group">
            <label for="exampleInputEmail1">Número Teléfonico</label>
            <input type="number" name="numeroTel" class="form-control" id="exampleInputPhone1" >
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input type="email" name="correoUser" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Confirma correo</label>
            <input type="email" class="form-control" name="correoUserConfirm" id="exampleInputUsuario1" >
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" name="passUser" class="form-control" id="exampleInputPassword1" >
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Confirma Contraseña</label>
            <input type="password" name="passUserConfirm" class="form-control" id="exampleInputPassword2" >
          </div>
          <!--Ir hacia atras al inicio-->
            <a href="index.php">
          <button class="btn btn-outline-danger ml-1 my-2 my-sm-0" type="button" name="registro">
            <i class="bi bi-chevron-left"></i>
            Inicio
          </button>
            </a>


          
          <button name="registro" class="btn btn-outline-primary ml-1 my-2 my-sm-0 float-right" type="submit">
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
  stylesCss.setAttribute('href', '../index.css');
</script>



<?php
include('../components/footer.php');
?>


<!--<script src="./login-ajax.js"></script>-->