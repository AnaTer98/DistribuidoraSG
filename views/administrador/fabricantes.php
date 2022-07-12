<?php
session_start();
include_once"views/administrador/components/header.php";
?>
<div class="container-fluid">
<div class="card mb-4 py-1 border-bottom-info">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Fabricantes e Importadores</h1>
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
<div class="row w-80 ">

  <div class="col mx-auto">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Giro</th>
      <th scope="col">Fabricante o Importador</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php if(isset($data['fabricantes']) ){ foreach($data['fabricantes'] as $key){ ?>
    <tr>

      <th scope="row"><?= $key['id']?></th>
      <td><?= $key['empresa']?></td>
      <td><?= $key['rol']?></td>
      <td><?= $key['nombre']?></td>
      <td><?= $key['telefono']?></td>
      <td><?= $key['correo']?></td>
      <td><a href="<?= $key['rutaPdf']?>" class="btn btn-outline-info mr-4"> PDF</a> <a href="index.php?c=formularios&a=removeFabricante&id=<?=$key['id']?>&r=<?=$key['rutaPdf']?>" class="btn btn-outline-danger ml-5"> BORRAR</a></td>
    </tr>
    <?php }}?>
  </tbody>
</table>
  </div>
  
</div>

</div>
<?php 
include_once"views/administrador/components/footer.php";
?>