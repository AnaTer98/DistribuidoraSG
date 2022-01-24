<?php
include 'components/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card mb-4 py-1 border-bottom-primary">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Ajustes</h1>
      </div>
    </div>
  </div>


  <!--Contenido aqui-->
  <div class="row">
    <!--La tabla de edicion de Empleados-->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Description</th>
          <th scope="col">Ruta</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar

          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
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
        </tr>
      </tbody>
    </table>

  </div>

</div>
<!-- /.container-fluid -->

<?php
include 'components/footer.php';
?>