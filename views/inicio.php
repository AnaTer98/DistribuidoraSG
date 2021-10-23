<?php

include_once("./views/components/header.html");



//<!--Carrusel-->
include_once('./views/components/carrusel.html');




?>
<div class="card mb-4 py-3 border-bottom-success">
                                <div class="card-body">
                                    .border-bottom-success
                                </div>
                            </div>

<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Nuestros productos y servicios</div>
    <div class="list-group list-group-flush">
      <a href="#" class="list-group-item list-group-item-action bg-light">Plataforma de Recargas</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Accesorios</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Telefonía</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Cómputo</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Servicios</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Novedades</a>
    </div>
  </div>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper" class="bg-light">
    <!--Aqui importar el navegador -->
    <?php include_once('views/components/navegador.php'); ?>
    <!--El botton para mostrar el menu lateral-->
    <!--<button class="btn btn-warning my-2 my-sm-0" id="menu-toggle" type="submit"><i class="bi bi-bar-chart-steps"></i></button>-->


   

    <h1 class="mt-4">Publicaciones</h1>
    <div class="mx-auto">

      <div class="col-12">
        <div class="card  mb-3" >

          <div class="row no-gutters">
            <div class="col-md-4">
              <img class="img-fluid" src="views/images/logos.jpg" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Titulo de la Publicacion</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <hr>
                <p class="card-text"><small class="text-muted">Tiempo transcurrido de la publicacion</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
   
  </div>

  <!-- /#page-content-wrapper -->

</div>
<?php
include_once('./views/components/footer.html');
?>
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>