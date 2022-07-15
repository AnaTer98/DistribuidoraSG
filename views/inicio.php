<?php
session_start();
include_once("./views/components/header.php");
include_once('./views/components/carrusel.php');
?>
<div class="container mx-auto col-12" id="wrapper">
  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Nuestros productos y servicios</div>
    <div class="list-group list-group-flush">
    <?php if (isset($data['serviciosProductos']) && !empty($data['serviciosProductos']) ) { for($i = 0;$i< count($data['serviciosProductos']);$i++){ ?>
      <a href="<?= $data['serviciosProductos'][$i]['rutaPdf'] ?>" class="list-group-item list-group-item-action bg-light"> <?= $data['serviciosProductos'][$i]['servicio']?></a>
    <?php }}?>
    </div>
  </div>
  <div class="bg-light  ">
    <!--Aqui importar el navegador -->
    <?php include_once('views/components/navegador.php'); ?>
    <!--<button class="btn btn-warning my-2 my-sm-0" id="menu-toggle" type="submit"><i class="bi bi-bar-chart-steps"></i></button>-->
    <div class="container">
      <div class="row " style="">
  <?php 
if(isset($data['publicaciones']) && !empty($data['publicaciones'])){
  foreach ($data['publicaciones'] as $key) { ?>
<div class="col-8 mb-4 position-static">
        <div class="card mb-4 shadow-sm" >
        <div class="card-header">
          <img src="images/logos.jpg" style="width:3rem;height:3rem;"class="rounded-circle d-inline"alt="">
            <h5 class="card-title ml-1 pb-5 d-inline">Distribuidora SG</h5>
            </div>
          <div class="card-body mb-2 mt-0">            
            <p class="card-text mb-6 pt-0"><?= $key['comentario']?></p>
          </div>
          <img src="<?= $key['rutaImg']?>" class="card-img-top rounded-0 "style="max-height:20rem;" alt="...">
          <div class="card-footer" style="">
          <small class="text-muted">Publicado <?= $key['fecha']?> </small>
        </div>
        </div>
</div>

<?php }}?>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<?php
include_once('./views/components/footer.php');
?>