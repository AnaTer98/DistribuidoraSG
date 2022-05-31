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
    <div class="container">

      <div class="row " style="">
<?php 
if(isset($data['publicaciones']) && !empty($data['publicaciones'])){
  foreach ($data['publicaciones'] as $key) {
    
  
?>
<div class="col-8 mb-4">
        <div class="card shadow-sm">
        <div class="card-header">
          <img src="images/logos.jpg" style="width:3rem;height:3rem;"class="rounded-circle d-inline"alt="">
            <h5 class="card-title ml-1 pb-10 d-inline">Distribuidora SG</h5>
            </div>
          <div class="card-body">            
            <p class="card-text pb-0"><?= $key['comentario']?></p>
          </div>
          <img src="<?= $key['rutaImg']?>" class="card-img-top rounded-0 " alt="...">
          <div class="card-footer" style="">
          <small class="text-muted">Publicado <?= $key['fecha']?> </small>
        </div>
        </div>
</div>
<?php }}?>
      </div>
    </div>

  </div>

</div>

<!-- /#page-content-wrapper -->

</div>
<?php
include_once('./views/components/footer.php');
?>