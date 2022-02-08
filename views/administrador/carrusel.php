<?php
include 'components/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card mb-4 py-1 border-bottom-success ">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Carrusel</h1>
            <div class="container text-right">
        <button class="btn btn-info btn-icon-split  " id="mostrar">
          <span class="icon text-white-50">
            <i class="bi bi-file-diff"></i>
          </span>
          <span class="text">Nuevo</span>
</button>
            </div>
      </div>
  
    </div>
  </div>
         <?php if(isset($_SESSION['mensaje'])&& !empty($_SESSION['mensaje'])){?>
           <div class="alert bg-success alert-dismissible fade show " role="alert">
          <p class="text-light h5"><?= $_SESSION['mensaje']?><strong>Eliminado</strong></p>  
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
      
     <?php  $_SESSION['mensaje'] ="";}?>
  <form action="index.php?c=formularios&a=postCarrusel" class=""  method="post" id="formulario" enctype="multipart/form-data">
    <div class="form-row ">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Descripción</label>
        <input type="text" class="form-control" name="descripcion"id="inputEmail4" placeholder="Pequeña descripcion sobre la imagen. ">
      </div>

      <div class="form-group col-md-4 ">
        <label for="inputZip">Imagen</label>
        <input type="file" class="form-control" name="imagen"id="inputImg" required>
      </div>
   
    </div>
  
    <div class="form-row justify-content-center">
     
   
      <div class="col-md-4">
      <img id="caja" src="images/logos-assets/logos.png" class="img-fluid rounded m-1" style="max-height:20rem;" alt="...">
      </div>
    </div>
  
    <button type="submit"value="guardar" name="guardar" class="btn btn-primary m-2">Guardar</button>
  </form>

  <!--Contenido aqui-->
  <div class="row container mx-auto ">
    <!--La tabla de edicion de Empleados-->
    <table class="table table-hover mx-10">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Descripción</th>
          <th scope="col">Ruta o Imagen</th>
          <th scope="col">Eliminar

          </th>
        </tr>
      </thead>
      <tbody>

    <?php    foreach ($data["Imagenes"] as $key ) {?>
      <tr>
      <td><?= $key["id"]?></td>
      <td style="width:20rem;"><p class="font-weight-bold"><?= $key["descripcion"]?></p></td>
      <td style="width:15rem;"><img src="<?=  $key["rutaImg"] ?>" style="width:15rem;height:8rem" class="img-thumbnail " alt="..."></td>
      <td>
            <a href="index.php?c=formularios&a=removeCarrusel&id=<?= $key["id"]?> &r=<?= $key["rutaImg"]?>"class="btn btn-danger btn-icon-split mt-5">
              <span class="icon text-white-50">
                <i class="bi bi-trash"></i>
              </span>
              <span class="text">Eliminar</span>
            </a>
      </td>
      </tr>
<?php }?>
      </tbody>
    </table>

<?php
include 'components/footer.php';
?>
