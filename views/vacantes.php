<?php
session_start();
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="content bg-light mx-auto rounded col-11" >  
    <?php if (isset($data['vacantes']) && !empty($data['vacantes'])) {echo("<div class='card-columns pt-3'>");
      foreach ($data['vacantes'] as $key) { ?>

        <div class="card  shadow-sm" >
          <img src="<?= $key['rutaImg'] ?>" alt="Esperame" class="card-img-top" style="max-height:24rem;">
          <div class="card-body">
            <h5 class="card-title"><?= $key['vacante']?></h5>
            <p class="card-text"><?= $key['descripcion'] ?></p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalform"><i class="bi bi-briefcase mr-1"></i> Postular</button>
          </div>
        </div>

<?php }echo("</div>");  } else { ?>
  <div class="card border-0  mt-3 text-center">
  <div class="card-header bg-white border-bottom-primary">
  <h4 class="card-title"></h4>
  </div>
  <div class="card-body">
    
    <p class="card-text h5">Por el momento nuestra compañía no tiene vacantes disponibles, inténtalo más tarde. </p>
    <img src="escritorio.svg" class="img-profile  w-50  "alt="" srcset="">
    
  </div>
 
</div>
<?php } ?>

</div>


<!--Formulario flotante para enviar solicitud-->
<div class="modal fade" tabindex="-1" id="modalform">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-bottom-warning">
        <h4 class="modla-title">Postularte</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body d-print-inline-block">
        <form id="formulario"action="index.php?index.php&c=formularios&a=postPostular" onsubmit="return validarOpcion(event);" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label for="puesto">Puesto deseado</label>
            <select name="puesto" id="opcionPuesto" class="form-control">
              <option value="">Escoge una opción</option>
                <?php foreach($data['vacantes'] as $key) {?>
                  <option value="<?= $key['vacante']?>"><?= $key['vacante']?></option>
                  <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" id="">
          </div>
          <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="" class="form-control" placeholder="Ingresa tu correo electronico valido " required>
          </div>
          <div class="form-group">
            <label for="numero">Telefono<span class="text-danger"> (valido de 10 digitos)</span></label>
            <input type="number" name="numero" class="form-control" placeholder="Ingresa tu numero telefononico valido " id="" required>
          </div>
          <div class="form-group">
            <label for="cv" class="">C.V. <span class="text-danger">(pdf)</span></label>
            <input type="file" name="cv" class="form-control-file" class="form-control" id="cv" required>
          </div>
          
          <button class="btn btn-success" name="postular" type="submit" id="postular"> <i class="bi bi-file-earmark-font"></i>Enviar</button>
        </form>
      </div>
     
    </div>
  </div>

</div>



<?php
include "views/components/footer.php";
?>

<script>


var validarOpcion = function(e){ 
  let opcion = $("#opcionPuesto").val();
    let valido = true;
    let pdf = $('#cv').val();
  pdf = pdf.split('.').pop();

if(opcion == "" || opcion == "Escoge una opción"){
  toastr["warning"]("No has seleccionado un puesto","Avizo");
}
if(pdf == "pdf" || pdf == "PDF" ){

    valido = true;
 
  
}else{
  toastr["error"]("Tu archivo no es un pdf","Advertencia");
  valido = false;
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
 return valido;

}


  
 
</script>