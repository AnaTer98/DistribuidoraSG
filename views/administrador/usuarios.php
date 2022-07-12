<?php
session_start();
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
<div class="d-flex justify-content-center mb-3">
  <div class="row justify-content-around">
<div class="col-4 row no-gutters">
  <div class="col bg-danger rounded" style="width:4rem;height:3rem; border:.25rem #e4e8f3 solid ;"></div>
  <div class="col "><p class="ml-2 card-text">Usuario Desactivado</p></div>
</div>
<div class="col-4 row no-gutters">
  <div class="col bg-secondary rounded" style="width:4rem;height:3rem; border:.25rem #e4e8f3 solid ;"></div>
  <div class="col "><p class="ml-2 card-text">Usuario Mayorista</p></div>
</div>
<div class="col-4 row no-gutters">
  <div class="col bg-info rounded" style="width:4rem;height:3rem; border:.25rem #e4e8f3 solid ;"></div>
  <div class="col "><p class="ml-2 card-text">Usuario Menudeo</p></div>
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
      case 'menudeo':
        if($key['activo']==0){
          $bg = "bg-danger";
        }else{
          $bg = "bg-info";
        }
        break;
      case "mayoreo":
        $bg = "bg-secondary";
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