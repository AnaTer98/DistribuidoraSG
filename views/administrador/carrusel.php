<?php
include 'components/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card mb-4 py-1 border-bottom-success shadow-lg">
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
            
  <form action="index.php?c=formularios&a=postCarrusel" class="" method="post" id="formulario" enctype="multipart/form-data">
    <div class="form-row ">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Descripción</label>
        <input type="text" class="form-control" name="descripcion"id="inputEmail4" placeholder="Pequeña descripcion sobre la imagen. ">
      </div>

      <div class="form-group col-md-4 ">
        <label for="inputZip">Imagen</label>
        <input type="file" class="form-control" name="imagen"id="inputImg">
      </div>
   
    </div>
  
    <div class="form-row justify-content-center">
     
   
      <div class="col-md-4">
      <img id="caja" src="images/logos.jpg" class="img-fluid rounded m-1" style="max-height:20rem;" alt="...">
      </div>
    </div>
  
    <button type="submit"value="guardar" name="guardar" class="btn btn-primary m-2">Guardar</button>
  </form>


<hr>
  <!--Contenido aqui-->
  <div class="row">
    <!--La tabla de edicion de Empleados-->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Descripción</th>
          <th scope="col">Ruta o Imagen</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar

          </th>
        </tr>
      </thead>
      <tbody>

<?php    foreach ($data["Imagenes"] as $key ) {?>
      <tr>
      <td><?= $key["id"]?></td>
      <td><p><?= $key["descripcion"]?></p></td>
      <td style="width:20rem;"><img src="<?=  $key["rutaImg"] ?>" style="width:15rem;height:8rem" class="img-thumbnail " alt="..."></td>
      <td>
            <a href="index.php?c=formularios&a=removeCarrusel&id=<?= $key["id"] ?>" class="btn btn-danger btn-icon-split">
              <span class="icon text-white-50">
                <i class="bi bi-trash"></i>
              </span>
              <span class="text">Eliminar</span>
            </a>
      </td>
      <td>
            <a href="#" class="btn btn-success btn-icon-split">
              <span class="icon text-white-50">
                <i class="bi bi-pencil-square"></i>
              </span>
              <span class="text">Editar</span>
            </a>
          </td>


      </tr>
    

<?php }?>


       <!-- <tr>
          <th scope="row">1</th>
          <td>Producto del mes</td>
          <td>12/12/12/1sdssvs/dvsd</td>
          <td>
            <a href="#" class="btn btn-danger btn-icon-split">
              <span class="icon text-white-50">
                <i class="bi bi-trash"></i>
              </span>
              <span class="text">Eliminar</span>
            </a>
          </td>

          <td>
            <a href="#" class="btn btn-success btn-icon-split">
              <span class="icon text-white-50">
                <i class="bi bi-pencil-square"></i>
              </span>
              <span class="text">Editar</span>
            </a>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>-->
      </tbody>
    </table>

  </div>

</div>
<!-- /.container-fluid -->

<?php
include 'components/footer.php';
?>
