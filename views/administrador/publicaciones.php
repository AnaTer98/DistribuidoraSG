<?php
include 'components/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card mb-4 py-1 border-bottom-info">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Publicaciones</h1>
      </div>
    </div>
  </div>


  <!--Contenido aqui-->
  <div class="row">
   

      <div class="col-xl-4">
       
        <form action="index.php?c=formularios&a=postPublicacion" method="POST" enctype="multipart/form-data">
          <div class="card " style="border-right: 0.25rem solid #36b9cc !important;">
          <div class="card-body">
          <div class="form-group ">
            <label for="descripcion">Descripción </label>
            <input type="text" name="descripcion" class="form-control" id="">
            </div>
            <div class="form-group mb-0">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" class="form-control-file" id="inputImg" required>
            </div>
            <img src="images/logos-assets/logos.png" id="caja" class="w-100 my-1 pt-1 "alt="images/logos-assets/logos.png">
            <button type="submit" value="agregar"name="agregar"class="btn btn-success "><i class="bi bi-box-arrow-in-up"></i> Agregar</button>
          </div>
          
        
          </div>
        </form>
        
      </div>



   
    <div class="col-xl-8">
      <!--La segunda columna principal -->
      <div class="row row-cols-2">
        <!--Nuevo contenedor para las tarjetas-->
     
<?php foreach($data['publicaciones'] as $key){?>
  <div class="col mt-2 ">
        <div class="card shadow-sm">
        <div class="card-header d-flex">
          <img src="images/logos.jpg" style="width:3rem;height:3rem;"class="rounded-circle d-inline"alt="">
            <h5 class="card-title ml-1 pb-10 mr-auto">Distribuidora SG</h5>
            <button href="#" class="btn btn-danger mb-0"><span class="icon"><i class="bi bi-trash"></i></span> </button>  
          </div>
          <div class="card-body">            
            <p class="card-text pb-0"><?= $key['comentario']?></p>
          </div>
          <img src="<?= $key["rutaImg"]?>" class="card-img-top rounded-0 " alt="...">
          <div class="card-footer">
          <small class="text-muted"> Publicado <?= $key['fecha']?></small>
        </div>
        </div>
      </div>
<?php }?>
    
    </div>

    </div>



  </div>

</div>
<br><br><br><br><br><br>
<!-- /.container-fluid -->

<?php
include 'components/footer.php';
?>