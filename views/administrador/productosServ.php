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

  <div class="row ">
    <div class="col-4 ">
      <form action="index.php?c=formularios&a=postServicio" method="post">
        <div class="card shadow-sm">
          <div class="card-header">
            <h5 class="card-title mb-0">Servicios</h5>
          </div>
          <div class="card-body">
            <div class="form-group mb-0">
               <select class="form-control">
                  <option>Selecciona Servicio o Producto</option>
                 <?php foreach($data['servicios'] as $key){?>
                      <option><?= $key['servicio']?></option>
                    <?php } ?>
               </select>
              <label for="img">Imagenes</label>
              <input type="file" name="img" class="form-control-file" id="">
            </div>
            
          </div><img src="images/logos-assets/logos.png" class="w-100 mt-0 pt-1" alt="">
        </div>
      </form>
    </div>
    <div class="col-8">
    <div class="row row-cols-3">
      <div class="col">
        <div class="card">
          <div class="card-header d-flex"> 
            <h3 class="card-title mr-auto mb-0 ">Recargas</h3>  
             <button href="#" class="btn btn-danger mb-0"><span class="icon"><i class="bi bi-trash"></i></span> </button>
            </div>
          <div class="card-body bg-success">
            <img src="file-earmark-pdf.svg" class="img-fluid py-2 mr-auto" style=" width: 40%;" alt="...">
          
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>







</div>
<!-- /.container-fluid -->

<?php
include 'components/footer.php';
?>