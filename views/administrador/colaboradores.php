<?php
include 'components/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card mb-4 py-1 border-bottom-warning">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Colaboradores</h1>
      </div>
    </div>
  </div>
<!--Formulario para crear vacante-->
<form action="index.php?c=colaboradores&a=postVacantes"method="post"  enctype="multipart/form-data">
  <div class="form-row">
    <div class="col-md-6 mb-6">
      <label for="validationDefault01">Vacante</label>
      <input type="text" name="vacante" class="form-control" placeholder="Trabajo al que hay un vacante" required>
    </div>
   
  <div class="form-group col-md-6 mb-6">
    <label for="exampleFormControlFile1">Elige una imagen relacionada</label>
    <input type="file" id="inputImg" name="img" class="form-control-file" >
  </div>

  </div>
  <div class="form-row">
  <div class="form-group mt-2 col-md-6">
    <label for="exampleFormControlTextarea1">Descripción de la vacante </label>
    <textarea type="text" class="form-control" style="height:15rem;" 
placeholder="Aqui sera un descripción, en lo que consiste la vacante y requisitos:
-Ingresar C.V.
-Correo activo
-Nombre completo
-Etc" name="descripcion" id="exampleFormControlTextarea1" rows="30"></textarea>
  </div>
  <div class="col-md-3 mb-6">
  <img src="images/logos-assets/logos.png" id="caja"style="width:35rem;height:18rem;" class="rounded mx-auto d-block" alt="...">
  </div>
  </div>
  
  <button class="btn btn-primary"  value="guardarV"name="guardarV" type="submit">Subir vacante</button>
</form>
  <!--Contenido aqui-->
  <br>
  <hr>
  <div class="row">
    <!--La tabla de edicion de Empleados-->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Puesto</th>
          <th scope="col">Descripción y Requisitos</th>
          <th scope="col">Imagen </th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
      <?php  foreach($data['imagenes'] as $key){?>
          <tr>
            <td > <?= $key['id']?></td>
            <td> <?= $key['vacante']?></td>
            <td><?= $key['descripcion']?> </td>
            <td><img class="img-thumbnail" style="width:15rem; height:8rem;" src="<?= $key['rutaImg']?>">   </td>
            <td>
              <a href="index.php?c=colaboradores&a=removeColaborador&id=<?= $key['id']?>&r=<?= $key['rutaImg']?>" class="btn btn-danger btn-icon-split mt-5">
                <span class="icon text-white-50">
                  <i class="bi bi-trash"></i>
                </span>
                <span class="text"> Eliminar </span>

              </a>  
            </td>
          </tr>      
      <?php } ?>
    
    
      </tbody>
    </table>



</div>
<!-- /.container-fluid -->

<?php
include 'components/footer.php';
?>