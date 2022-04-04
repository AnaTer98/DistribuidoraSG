<?php
include_once("./views/components/header.php");
//<!--Carrusel-->
include_once('./views/components/carrusel.php');
?>


<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Nuestros productos y servicios</div>
    <div class="list-group list-group-flush">
      <a href="#" class="list-group-item list-group-item-action bg-light">Plataforma de Recargas</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Accesorios</a>
      <a href="PDF/1.pdf" class="list-group-item list-group-item-action bg-light">Telefonía</a>
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
    <div class="mx-auto">

      <div class="row col-12">
        <div class="card  mb-3" >

          <div class="row no-gutters"style="height:22rem;">
            <div class="col-md-4">
              <img class="img-fluid" src="images/03-07-22-04-22-18.jpeg" style="height:22rem;" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body ">
                <h3 class="card-title">Titulo de la Publicacion</h3>
                <p class="card-text h5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis ea mollitia minima dolor minus? Fugiat et, tenetur laudantium quo sed eos explicabo possimus id! Aspernatur, deleniti? Dolor, vel perspiciatis doloribus ad, numquam consequatur provident earum dicta illum possimus deleniti architecto labore officia rem, voluptas temporibus debitis et! Tempore veritatis reiciendis perspiciatis doloremque distinctio blanditiis! Praesentium, minus pariatur distinctio expedita dolores delectus, laborum ab consequatur dolorem hic unde, eius voluptatum mollitia ratione. Eveniet voluptate qui rerum distinctio aspernatur, aut sed mollitia labore pariatur minima accusamus accusantium dolores, praesentium expedita molestias ullam laboriosam, nam assumenda similique. Totam ipsam est tempore velit perspiciatis? This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
               
                  <hr >
                <p class="card-text "><small class="text-muted">Tiempo transcurrido de la publicacion</small></p>
                </div>
                
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
include_once('./views/components/footer.php');
?>

