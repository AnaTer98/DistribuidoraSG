<?php
include 'components/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">


  <!-- Page Heading -->
  <div class="card mb-4 py-1 border-bottom-warning">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Colaboradores</h1>
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
  <!--Formulario para crear vacante-->
  <div class="row ">
    <div class=" col-xl-3 col-lg-6 col-md-8 col-sm-12 border-right border-warning " style="border-right: 0.25rem #f6c23e solid !important;">

    <form action="index.php?c=colaboradores&a=postVacantes" method="POST" enctype="multipart/form-data">
      <div class="card mt-2 m-0 " style="">

        <img src="images/logos-assets/logos.png" class="card-img-top "  id="caja" alt="...">
        
        <input type="file" class="form-control-file mt-1  " id="inputImg" name="img">
   
       <div class="card-body">
          <label for="vaca" class="mb-0 h5">Vacante</label>
          <input type="text" name="vacante" class="form-control mt-0" placeholder="Nuevo puesto" style="" id="">
          <label for="descripcion">Descripción</label>
   <p class="card-text"><textarea name="descripcion" id="" class="form-control mx-0 card-text " style="height:18rem;font-size: 80%;font-weight: 400;" arial-label="With textarea"></textarea></p>
          <button type="submit" name="guardarV" value="guardarV" class="btn btn-warning mt-1"><i class="bi bi-briefcase mr-1"></i>Guardar</button>
        </div>
  
      </div>
      
</form>
    </div>

    <div class=" col-xl-9 col-lg-12 col-md-12 col-sm-12 ">
      <div class="card-columns">

      <?php if(isset($data['vacantes']) && !empty($data['vacantes'])){
        foreach ($data['vacantes'] as $key ) { ?>
            <div class="card  mx-auto my-2" >
            <img src="<?= $key['rutaImg']?>" class="card-img-top" alt="<?= $key['rutaImg']?>">
            <div class="card-body">
              <h5 class="card-title"><?= $key['vacante']?></h5>
              <p class="card-text"><?= $key['descripcion']?></p>
              <a href="index.php?c=colaboradores&a=removeColaborador&id=<?=$key['id']?>&r=<?= $key['rutaImg']?>" class="btn btn-danger"><i class="bi bi-trash"></i>Borrar</a>
            </div>          
          </div>
      <?php } }else{?>
 <div class="card border-0  mt-3 text-center">
  <div class="card-header bg-white border-bottom-primary">
  <h4 class="card-title">No hay registros</h4>
  </div>
  <div class="card-body">
    <p class="card-text h5">Teines que llanar el formulario con los datos para mostrar la información  </p>
    <img src="escritorio.svg" class="img-profile  w-50  "alt="" srcset="">
  </div>
</div>
      <?php }?>
      </div>
    </div>
  </div>
</div>
  <!--Contenido aqui-->

  <br><br><br><br><br>
  <?php
  include 'components/footer.php';
  ?>