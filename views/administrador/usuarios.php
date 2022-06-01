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
        <h1 class="h3 mb-0 text-gray-800">Usuarios!!!!!!!!!!!!!</h1>
      </div>
    </div>
  </div>

<!--tablas de usuarios-->
<div class="table-responsive-lg"></div>
<table class="table">
  <thead class="thead-light">
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
    <?php foreach ($data['usuarios'] as $key ) {?>
    <tr>
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
<!-- /.container-fluid->Contenedor principal -->
</div>
<?php
include 'components/footer.php';
?>