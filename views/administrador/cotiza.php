<?php
session_start();
include_once"views/administrador/components/header.php";
?>
<div class="container-fluid">
<div class="card mb-4 py-1 border-bottom-success">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Cotiza </h1>
      </div>
    </div>
  </div>
  <?php if (isset($_SESSION['mensaje']) && !empty($_SESSION['mensaje'])) { ?>
    <div class="alert bg-<?= $_SESSION['mensaje'][0] ?> alert-dismissible fade show " role="alert">
      <p class="text-light h5"><?= $_SESSION['mensaje'][1] ?><strong><?= $_SESSION['mensaje'][2] ?></strong></p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php $_SESSION['mensaje'] = "";
  } ?>
<div class="row ">

  <div class="col-xl-5">
    <form action="index.php?c=formularios&a=postCotiza" enctype="multipart/form-data" method="post">
      <div class="card bg-sm-dark">
        <div class="card-header"><h5 class="card-title mb-0">Tarjeta de precentación</h5></div>
        <div class="card-body">
        <div class="form-group">
        <label for="img">Targeta de Precentación</label><br>
        <input type="file" name="img" id="inputImg" required>
      </div>
      <div class="form-group">
        <img src="images/logos-assets/logos.png" id="caja"class="w-100 pt-1" style="height: 20rem;" alt="">
      </div>
      <button type="submit"name="cotizador" value="cotizador" class="btn btn-outline-success ">Guardar</button>
        </div>
      </div>
    </form>

  </div>
  <div class="col-xl-7">
      <div class="row ">
        <?php if(!isset($data['cardCotiza']) || !empty($data['cardCotiza'])){  foreach($data['cardCotiza'] as $key){ ?>
        <div class="col-lg-6 col-sm-12 mt-2" >
          <div class="card border-success ">
            <div class="card-header d-flex">
              <h5 class="card-title mr-auto ">
                Tarjeta de Presentación
              </h5>
              <a href="index.php?c=formularios&a=removeCotizador&id=<?= $key['id']?>&r=<?= $key['rutaImg']?>" class="btn btn-danger mb-0 mx-auto"><span class="icon"><i class="bi bi-trash"></i></span> </a>
              <span class="icon my-1"><i class="bi bi-person-badge "></i></span>
            </div>
            <img src="<?= $key['rutaImg']?>" class="card-img-bottom" width="360" height="300" alt="" srcset="">
          </div>
        </div>
        <?php }?>
      </div>
      <?php }else{?>
        <div class="card shadow-sm border-0  mt-3 text-center">
  <div class="card-header bg-white border-bottom-primary">
  <h4 class="card-title">No hay registros</h4>
  </div>
  <div class="card-body">
    <p class="card-text h5">Tienes que llanar el formulario con los datos para mostrar la información  </p>
    <img src="escritorio.svg" class="img-profile  w-50"alt=""  srcset="">
  </div>
</div>  
      <?php }?>

  </div>
</div>
</div>
<br><br><br><br><br><br><br>
<?php 
include_once"views/administrador/components/footer.php";
?>