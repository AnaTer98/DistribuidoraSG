    <!doctype html>
    <html lang="en">

    <head>
      <title>Admin</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!--Iconos-->

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="sb-admin-2.css">
    </head>


    <body id="page-top">

      <!-- Page Wrapper -->
      <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          
            <div class="sidebar-brand-text mx-3">Administrador</div>
          </a>

          <!--Control-->
          <li class="nav-item active mx-auto">
            <a class="nav-link mx-auto" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
              <i class="bi bi-gear-fill"></i>
              Ajustes
            </a>
            <div id="collapseUtilities" class="collapse " aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item active" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
              </div>
            </div>
          </li>


          <!-- Divider -->
          <hr class="sidebar-divider my-0">


          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Heading -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bi bi-collection"></i>
              Carrusel
            </a>

          </li>

          <!-- Empleados-->
          <hr class="sidebar-divider my-0">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bi bi-person-badge"></i>
              Empleados
            </a>

          </li>
          <!-- Publicaciones-->
          <hr class="sidebar-divider my-0">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bi bi-arrow-up-square"></i>
              Publicaciones
            </a>

          </li>
          <!-- Productos-->
          <hr class="sidebar-divider my-0">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bi bi-bag-plus"></i>
              Productos
            </a>

          </li>
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">


            <!-- Begin Page Content -->
            <div class="container-fluid">

              <!-- Page Heading -->
              <div class="card mb-4 py-1 border-bottom-warning">
                <div class="card-body">
                  <div class="d-sm-flex align-items-center ">
                    <h1 class="h3 mb-0 text-gray-800">Vacantes</h1>
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

          </div>
          <!-- End of Main Content -->

          <!-- Footer -->
          <footer class="sticky-footer bg-gradient-light">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Distribuidora SG</span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>



      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>




      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>