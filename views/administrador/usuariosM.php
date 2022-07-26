<?php
include 'components/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card mb-4 py-1 border-bottom-primary">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
      </div>
    </div>
  </div>
  <div class="row row-cols-2">
    <div class="col ">
    <a href="index.php?c=vistasAd&a=adminUsuarios"><div class="container btn bg-dark text-white mb-3"><h5 class="text-center">Usuarios Minoristas</h5></div></a>  
    </div>
    <div class="col">
    <div class="container border-bottom-secondary mb-3"> <h5 class="text-center pb-2"> Usuarios Mayoristas</h5></div>
    </div>
  </div>
<div class="d-flex justify-content-center mb-3">
  <div class="row justify-content-around">
<div class="col-4 row no-gutters">
  <div class="col bg-danger rounded" style="width:4rem;height:3rem; border:.25rem #e4e8f3 solid ;"></div>
  <div class="col "><p class="ml-2 card-text">Usuario Desactivado</p></div>
</div>
<div class="col-4 row no-gutters">
  <div class="col bg-success rounded" style="width:4rem;height:3rem; border:.25rem #e4e8f3 solid ;"></div>
  <div class="col "><p class="ml-2 card-text">Usuario Activado</p></div>
</div>
</div>

</div>
<!--tablas de usuarios-->
<div class="table-responsive-lg"></div>
<table class="table">
  <thead class="theadt">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Rol</th>
      <th scope="col">Activo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['usuarios'] as $key ) {
      $txt=" text-white";
      switch ($key['rol']) {      
      case 'mayoreo':
        if($key['activo']==0){
          $bg = "bg-danger";
        }else{
          $bg = "bg-success";
        }
        break;
      default:
       $bg="bg-light";
       $txt = " text-dark";
        break;
    } ?>
    <tr class="<?= $bg?> <?= $txt?> ">
      <th scope="row"><?= $key['id']?></th>
      <td><?= $key['nombre']?></td>
      <td><?= $key['correo']?></td>
      <td><?= $key['telefono']?></td>
      <td><?= $key['rol']?></td>
      <td><?= $key['activo']?></td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>
</div>
<?php
include 'components/footer.php';
?>