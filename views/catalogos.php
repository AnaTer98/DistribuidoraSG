<?php
session_start();
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="content bg-light mx-auto rounded col-8">
<div class="row row-cols-2 py-3 ">
  
    <div class="col">
    <?php if($data['catalogos']["menudeo"] !== NULL ){ ?>
    <a href="<?= $data['catalogos']['menudeo']?>" class="text-muted ">
        <div class="card shadow-sm">
            <div class="card-header bg-light">
                <p class="card-title h5"> Catalogo Minorista</p>
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
            <p class="h5">Por el momento no hay catalogo disponible vuelba mas tarde!</p>
            </div>
        </div>
      
        <?php }?>
    </div>
    <div class="col ">
    
<?php if( (isset($_SESSION['usuario'])||!empty($_SESSION['usuario'])) && ($_SESSION['usuario'][1] == "mayoreo")){ if ($data['catalogos']['mayoreo'] !== NULL){  ?>
    <a href="" class="text-muted">
        <div class="card shadow-sm">
            <div class="card-header ">
                <p class="card-title h5">Catalogo Mayorista</p>
            </div>
            <div class="card-body">
            <img src="catalogo.png" class="card-img-bottom w-50 mx-auto" alt="">
            </div>
        </div>
    </a>
        <?php }else{?>
            <div class="card">
            <div class="card-header  border-bottom-info">
                <p class="card-title h5"> Catalogo Mayorista</p>
            </div>
            <div class="card-body text-center">
            <img src="advertencia.png" class="card-img-bottom w-50 mx-auto" alt="">
            <p class="h5">Por el momento no hay catalogo disponible vuelba mas tarde!</p>
            </div>
        </div>
        <?php }}else{ ?>
            <div class="card border-0 bg-transparent col-10">
            <div class="card-header bg-light border-bottom-primary">
                <p class="card-title">¿No eres un cliente mayorista? </p>
            </div>
            <div class="card-body content-center">
                <!--Aqui sera el modal la activacion-->
                <p class="card-text ">No eres un cliente mayorista <br>Te gustaría serlo, solicita tu cambio ahora</p>
            
                <button data-toggle="modal" data-target="#modalForm" class="btn btn-outline-success w-60 "><i class="bi bi-journal-arrow-up mr-1"></i>Solicitar Catalogo</a>
            </div>
        </div>
            <?php }?>
    </div>

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
        <form  onsubmit="return valida();" class="" id="formulario"enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label for="giro">Nombre de tu empresa</label>
            <input type="text" name="giro" placeholder="Giro" class="form-control" id="giro">
          </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text"  name="nombre" class="form-control"  value="<?php echo($_SESSION['usuario'][1]);?>" disabled id="">
          </div>
          <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text"  name="direccion" class="form-control"  value=""  id="direccion">
          </div>
          <div class="form-group">
            <label for="cv" class="">C.V. <span class="text-danger">(pdf)</span></label>
            <input type="file" name="cv" class="form-control-file" class="form-control" id="cv" >
          </div>
          
          <button class="btn btn-success" name="postular" type="submit" id="postular"> <i class="bi bi-file-earmark-font"></i>Enviar</button>
        </form>
      </div>
     
    </div>
  </div>

</div>
</div>
<script>
  
     const formulario = document.getElementById("formulario");
     const mensaje = document.getElementById("mensaje");
     const direccion = document.getElementById("direccion");
     const giro = document.getElementById("giro");
     //formulario.classList.add('d-none');
    //mensaje.classList.remove('d-none');
  
    function valida (callback){
      var correcto = true;
      if(direccion.value ==""){
        toastr["error"]("Debes ingresar la dirección de tu empresa ","Error");
      correcto = false
      }
      if(giro.value == ""){
        toastr["error"]("Debes ingresar la dirección de tu empresa ","Error");
        correcto = false;
      }
   if(correcto = true){
  formulario.classList.add('d-none');
    mensaje.classList.remove('d-none');
    setTimeout(()=>{
     correcto = true ;
    },9000);

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
<?php
include "views/components/footer.php";
?>
