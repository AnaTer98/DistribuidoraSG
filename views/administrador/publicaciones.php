<?php
session_start();
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

  <?php if(isset($_SESSION['mensaje'])&& !empty($_SESSION['mensaje'])){?>
           <div class="alert bg-<?= $_SESSION['mensaje'][0]?> alert-dismissible fade show " role="alert">
          <p class="text-light h5"><?= $_SESSION['mensaje'][1]?><strong><?= $_SESSION['mensaje'][2]?></strong></p>  
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
      
     <?php  $_SESSION['mensaje'] ="";}?>
  <!--Contenido aqui-->
  <div class="row">
      <div class="col-xl-4">
       
        <form action="index.php?c=formularios&a=postPublicacion" method="POST" enctype="multipart/form-data">
          <div class="card " style="border-right: 0.25rem solid #36b9cc !important;">
          <div class="card-body">
          <div class="form-group ">
            <label for="descripcion">Comentario </label>
            <textarea type="text" name="descripcion" class="form-control w-100 " style="height: 9rem;" id=""></textarea>
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
            <a href="index.php?c=formularios&a=removePublicacion&id=<?= $key['id']?>&r=<?= $key['rutaImg']?>" class="btn btn-danger mb-0 py-2"><span class="icon "><i class="bi bi-trash py-auto"></i></span> </a>  
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