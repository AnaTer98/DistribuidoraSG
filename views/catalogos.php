<?php
session_start();
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="content bg-light mx-auto rounded col-8 pt-1">
<?php if(isset($_SESSION['mensajeActivado']) && !empty($_SESSION['mensajeActivado'])){ ?>
<div class="col-11 bg-<?= $_SESSION['mensajeActivado'][0] ?>  mb-3 rounded container">
  <p class="font-weight-normal p-4 text-white h3">
 <?= $_SESSION['mensajeActivado'][1] ?>
</p>
</div>
<?php $_SESSION["mensajeActivado"] ="";}?>

<div class="row py-3">
  <!--Una caja mas grande para hacer que se registre -->
  <?php if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){?>
    <div class="col-6">
    <?php if($data['catalogoMino'][0]["tipo"] !== NULL ){ ?>
    <a href="<?= $data['catalogoMino'][0]['rutaPdf']?>" class="text-muted ">
        <div class="card shadow-sm">
            <div class="card-header bg-light">
                <p class="card-title h5"> Catálogo Minorista</p>
            </div>
            <div class="card-body">
            <img src="catalogo.png" class="card-img-bottom w-50 mx-auto" alt="">
            </div>
        </div>
        </a>
    

    <?php }else{?>
       
        <div class="card">
            <div class="card-header  border-bottom-info">
                <p class="card-title h5"> Catalogo Minorista</p>
            </div>
            <div class="card-body text-center">
            <img src="advertencia.png" class="card-img-bottom w-50 mx-auto" alt="">
            <p class="h5">Por el momento no hay catálogo disponible vuelva mas tarde!</p>
            </div>
        </div>
      
        <?php }?>
    </div>
    <div class="col-6">
    
<?php if( (isset($_SESSION['usuario'])||!empty($_SESSION['usuario'])) && ($_SESSION['usuario'][1] == "mayoreo")){ if ($data['catalogoMay'][0]['tipo'] !== NULL){  ?>
    <a href="<?= $data['catalogoMay'][0]['rutaPdf']?>" class="text-muted">
        <div class="card shadow-sm">
            <div class="card-header ">
                <p class="card-title h5">Catálogo Mayorista</p>
            </div>
            <div class="card-body">
            <img src="catalogo.png" class="card-img-bottom w-50 mx-auto" alt="">
            </div>
        </div>
    </a>
        <?php }else{?>
            <div class="card">
            <div class="card-header  border-bottom-info">
                <p class="card-title h5"> Catálogo Mayorista</p>
            </div>
            <div class="card-body text-center">
            <img src="advertencia.png" class="card-img-bottom w-50 mx-auto" alt="">
            <p class="h5">Por el momento no hay catálogo disponible vuelva mas tarde!</p>
            </div>
        </div>
        <?php }}else{ ?>
            <div class="card border-0 bg-transparent col-10">
            <div class="card-header bg-light border-bottom-primary">
                <p class="card-title">¿No eres un cliente mayorista? </p>
            </div>
            <div class="card-body content-center">
                <!--Aqui sera el modal la activacion-->
                <p class="card-text ">¿Te gustaría serlo?<br>Solicita tu cambio ahora</p>
                <button data-toggle="modal" data-target="#modalForm" class="btn btn-outline-success w-60 "><i class="bi bi-journal-arrow-up mr-1"></i>Solicitar </a>
            </div>
        </div>
            <?php }?>
    </div>
    <?php }else{?>
        <div class="col-8 mx-auto ">
          <div class="card border border-secondary" >
            <div class="card-header border-bottom-primary">
              <p class="card-title mx-auto ">No has te has registrado</p>
            </div>
            <div class="card-body">
              <p class="card-text">Para tener acceso a nuestros catálogos necesitas registrarte</p>
             <div class="container container-center px-4"><img src="logeando.svg" class="card-img-top  mt-1 mx-auto" height="180"></div>
              <a href="index.php?c=vistas&a=registrar" class="btn btn-outline-success"><i class="bi bi-box-arrow-up mr-1"></i>Resgistrarte</a>
            </div>
          </div>
        </div>
      <?php }?>
<!--Contenedor row -->
</div>
<div class="modal fade" tabindex="-1" id="modalForm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-bottom-warning">
        <h4 class="modla-title">Solicita ser usuario mayorista</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span> 
        </button>
      </div>
      <div class="modal-body d-print-inline-block">
        <!--Elemento que aun no se como se va a ver -->
        <div class="container d-none" id="mensaje">
            <img src="patch-check.svg" class="rounded mx-auto d-block w-50 text-success" alt="">
            <h4>¡Felicidades!</h4>
            <p> Verifica tu correo electronico para hacer el cambio.</p>
        </div>
        <form  onsubmit="return valida();" action="index.php?c=formularios&a=activarMayorista&id=<?php echo($_SESSION['usuario'][2])?>&r=<?php echo($_SESSION['usuario'][3])?>" id="formulario"enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label for="giro">Nombre de tu empresa</label>
            <input type="text" name="giro" placeholder="Giro" class="form-control" id="giro">
          </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text"  name="nombre" class="form-control"  value="<?php echo($_SESSION['usuario'][0]);?>" disabled id="">
          </div>
          <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text"  name="direccion" class="form-control"  value=""  id="direccion">
          </div>          
          <button class="btn btn-success" name="cambioMayorista" type="submit" id="postular"> <i class="bi bi-file-earmark-font"></i>Enviar</button>
        </form>
      </div>
     
    </div>
  </div>
</div>
</div>

<script>
     const direccion = document.getElementById("direccion");
     const giro = document.getElementById("giro");  
    function valida (){
      var correcto = false;
      if(direccion.value ==""){
        toastr["error"]("Debes ingresar la dirección de tu empresa ","Error");
        return correcto;
      }
      if(giro.value == ""){
        toastr["error"]("Debes ingresar el nombre de tu empresa ","Error");
        return correcto;
      }

   if(direccion.values != "" && giro.value != ""){
    correcto = true;  
    return  correcto;
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

   }


</script>
<br><br><br><br><br><br><br><br><br><br>
<?php
include "views/components/footer.php";
?>
