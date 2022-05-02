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
    <div class="alert bg-<?= $_SESSION['mensaje'][1] ?> alert-dismissible fade show " role="alert">
      <p class="text-light h5"><?= $_SESSION['mensaje'][0] ?><strong>Eliminado</strong></p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php $_SESSION['mensaje'] = "";
  } ?>
  <!--Formulario para crear vacante-->
  <div class="row">
    <div class="col-4">
    <form action="index.php?c=colaboradores&a=postVacantes" method="POST" enctype="multipart/form-data">
      <div class="card mt-2 " style="width: 21rem;">

        <img src="images/vac-00-02-54.jpeg" class="card-img-top "  id="caja" alt="...">
        
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
    <div class="col-8">
      <div class="row row-col-md-2 m-3 d-flex justify-content-start">

      <?php if(isset($data['vacantes']) && !empty($data['vacantes'])){
        foreach ($data['vacantes'] as $key ) { ?>
          <div class="m-3 d-flex ">
            <div class="card mt-2" style="width:21rem;">
            <img src="<?= $key['rutaImg']?>" class="card-img-top" alt="<?= $key['rutaImg']?>">
            <div class="card-body">
              <h5 class="card-title"><?= $key['vacante']?></h5>
              <p class="card-text"><?= $key['descripcion']?></p>
              <a href="index.php?c=colaboradores&a=removeColaborador&id=<?=$key['id']?>&r=<?= $key['rutaImg']?>" class="btn btn-danger"><i class="bi bi-trash"></i>Borrar</a>
            </div>          
          </div>
          </div>

        

      <?php } }else{
echo "<h1>No hay resgistros añade uno</h1>";
        
      }

      ?>
       

      </div>
    </div>
  </div>
  <!--Contenido aqui-->

  <br><br><br><br><br>
  <?php
  include 'components/footer.php';
  ?>