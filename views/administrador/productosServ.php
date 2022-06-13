<?php
session_start();
include 'components/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card mb-4 py-1 border-bottom-warning">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Productos y Servicios</h1>
      </div>
    </div>
  </div>
  <?php if(isset($_SESSION['mensaje'])&& !empty($_SESSION['mensaje'])){?>
           <div class="alert bg-<?= $_SESSION['mensaje'][0]?> alert-dismissible fade show " role="alert">
          <p class="text-light h5"><?= $_SESSION['mensaje'][1]?><strong><?= $_SESSION['mensaje'][2]?></strong></p>  
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
      
     <?php  $_SESSION['mensaje'] ="";}?>
  <div class="row ">
    <div class="col-4 ">

      <form action="index.php?c=formularios&a=postServ" onsubmit="return validarOpcion(event);" method="post" enctype="multipart/form-data">
        <div class="card shadow-sm">
          <div class="card-header">
            <h5 class="card-title mb-0">Servicios</h5>
          </div>
          <div class="card-body">
            <div class="form-group mb-0">
               <select class="form-control" id="opcion"  name="opcion">
                  <option class="text-muted" value="" >Selecciona Servicio o Producto</option>
                 <?php foreach($data['servicios'] as $key){?>
                      <option value="<?= $key['servicio']?>"><?= $key['servicio']?></option>
                    <?php } ?>
               </select>
              <label for="img">Pdf</label>
              <input type="file" name="pdf" class="form-control-file" id="inputImg" required>
            </div>
            
          </div>
          
          <button type="submit"class="btn btn-primary " name="guardarServ">Guardar</button>
        </div>
      </form>
    </div>
    <div class="col-8">
    <div class="row row-cols-3">
     <?php foreach ($data['serv'] as $key ) {
       if(!empty($key['rutaPdf'])){
     ?>
     <div class="col">
        <div class="card">
          <div class="card-header d-flex"> 
            <h3 class="card-title mr-auto mb-0 "><?= $key['servicio']?></h3>  
             <a href="index.php?c=formularios&a=removeProServ&id=<?= $key['id']?>&r=<?= $key['rutaPdf']?>" class="btn btn-danger mb-0"><span class="icon"><i class="bi bi-trash"></i></span> </a>
            </div>
          <div class="card-body bg-success">
            <img src="file-earmark-pdf.svg" class="img-fluid py-2 mr-auto" style=" width: 40%;" alt="...">
        
          </div>
        </div>
      </div>
     <?php }}?>
      
    </div>
    </div>
  </div>







</div>
<!-- /.container-fluid -->
<?php
include 'components/footer.php';
?>

<script>


var validarOpcion = function(e){ 
  let opcion = $("#opcion").val();
    let valido = true;
    console.log(opcion);
  
 if(opcion == "" || opcion =="Selecciona Servicio o Producto"){
    toastr["warning"]("Selecciona una opción","Advertencia");
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