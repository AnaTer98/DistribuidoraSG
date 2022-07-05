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
        <h1 class="h3 mb-0 text-gray-800">Colaboradores</h1>
      </div>
    </div>
  </div>

    <!--contenedor-->
    <div class="row row-cols-2">
    <div class="col">
        <a href="index.php?c=vistasAd&a=adminColaboradores">
          <div class="container btn bg-dark text-white mb-3">
            <h5 class="text-center">Puestos</h5>
          </div>
        </a>
      </div>
      <div class="col ">
        <div class="container border-bottom-secondary mb-3">
          <h5 class="text-center pb-2"> Propuestas </h5>
        </div>
      </div>
      
    </div>

    <?php if (isset($_SESSION['mensaje']) && !empty($_SESSION['mensaje'])) { ?>
      <div class="alert bg-<?= $_SESSION['mensaje'][0] ?> alert-dismissible fade show " role="alert">
        <p class="text-light h5"><?= $_SESSION['mensaje'][1] ?><strong><?= $_SESSION['mensaje'][2] ?></strong></p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <?php $_SESSION['mensaje'] = "";
    } ?>
    <!--Contenido de las pesonas interesadas-->
    <div class="row w-80">
      <div class="col mx-auto">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Puesto deseado</th>
              <th scope="col">Nombre</th>
              <th scope="col">Correo</th>
              <th scope="col">Telefono</th>
              <th scope="col">Acciones</th>
              
            </tr>
          </thead>
          <tbody>
            <?php foreach($data['postulados'] as $key){?>
              <tr>
                <th scope="row"><?= $key['id']?></th>
                <th><?= $key['puesto']?></th>
                <th><?= $key['nombre']?></th>
                <th><?= $key['correo']?></th>
                <th><?= $key['telefono']?></th>
                <th><a href="<?= $key['rutaCv']?>" class="btn btn-outline-warning mr-2">PDF </a><a href="" class="btn btn-outline-danger ml-3">Borrar</a> </th>
              </tr>
            <?php }?>  
          </tbody>
        </table>

      </div>
    </div>

  </div>
  <!--Contenido aqui-->
  <br><br><br><br><br>
  <?php
  include 'components/footer.php';
  ?>