<?php
include_once('views/components/header.php');
include_once('views/components/navegador.php');

?>
<!--un mensaje cuando exista el correo-->

<div class="container row-col-12 " style="height: 55rem;" id="form-registro">
  <div class="pt-4">
    <div class="card text-white border border-success mx-auto " id="card-inresar-user" style="max-width: 30rem;">
      <div class="card-header bg-success">Registro</div>

      <?php if (isset($_SESSION['mensajeCorreo']) && !empty($_SESSION['mensajeCorreo'])){ ?>
        <div class="alert alert-<?= $_SESSION['mensajeCorreo'][1]?> alert-dismissible fade show mb-0" role="alert">
  <strong><?= $_SESSION['mensajeCorreo'][0] ?></strong> <?= $_SESSION['mensajeCorreo'][2]?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php }   $_SESSION['mensajeCorreo'] =""; ?>

      <div class="card-body text-dark">

        <form method="post" action="index.php?c=formularios&a=registrarUsuario" onsubmit="return validar(event);"  name="registro" class="login-form validate-form">

          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombreUser" id="nombreUser">
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Número Teléfonico</label>
            <input type="number" name="numeroTel" class="form-control" id="numeroTel">
          </div>

          <div class="form-group">
            <label for="correoUser">Correo</label>
            <input type="email" id="correoUser" name="correoUser" class="form-control" aria-describedby="emailHelp" required>
          </div>



          <div class="form-group">
            <label for="passUser">Contraseña</label>
            <input type="password" name="passUser" id="passUser" class="form-control" >
          </div>

          <div class="form-group">
            <label for="passUserConfirm">Confirma Contraseña</label>
            <input type="password" name="passUserConfirm" id="passUserConfirm" class="form-control">
          </div>
          <a href="index.php?c=vistas&a=ingresar">¿Ya estas registrado?</a>
          <!--Ir hacia atras al inicio-->
          <button name="registro" class="btn btn-outline-primary ml-1 my-2 my-sm-0 float-right" type="submit">
            <i class="bi bi-arrow-up-square"></i>
            Registrar
          </button>
        </form>
      </div>
    </div>
    <br>

  </div>
</div>

<script>
  var validar =function(e) {

 let valida = true;

 var nombreUser = $('#nombreUser').val();
  if(nombreUser==null||nombreUser.length==0||nombreUser=='') {
  toastr["warning"]("Debes de ingresar tu nombre ", "Aviso ");
 
    valida=false;
}
var numeroTel = $('#numeroTel').val();
if(numeroTel==null||numeroTel.length==0||numeroTel=='') {
  toastr["warning"]('Debes de ingresar tu numero de celular','Aviso');

valida=false;
}
if(numeroTel.length < 10){
    toastr["warning"]("Ingresa un numero de telefono valido", "Aviso");
    valida=false;
  }
  var pass = $('#passUser').val();
  if(pass.length==0){
    toastr["error"]("Ingresa una contraseña","Error");
    valida=false;
  }
  if(pass.length<8){
    toastr["error"]("Ingresa una contraseña de al menos 8 caracteres");
    valida=false;
  }

  var passCon = $('#passUserConfirm').val();
  if(pass.length>=8 && passCon.length==0){
    toastr["warning"]("Ingresa una contraseña de confirmacion","Error");
  valida=false;
  }
  
  if(!( pass==passCon )){
toastr["error"]("Las contraseñas no coinciden","Error");
valida=false;

  }

   
  toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "3000",
  "hideDuration": "8000",
  "timeOut": "16000",
  "extendedTimeOut": "8000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

return valida;
}

</script>




<?php
include('views/components/footer.php');
?>
