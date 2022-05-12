<?php
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="container bg-light rounded pt-3  ">
   
      <div class="card-columns" >     
      <?php if(isset($data['vacantes'])&& !empty($data['vacantes'])){
        foreach ($data['vacantes'] as $key ) { ?>

            <div class="card mx-2 my-2 w-sm-25" style="">
            <img src="<?= $key['rutaImg']?>" alt="Esperame" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?= $key['vacante']?></h5>
              <p class="card-text"><?= $key['descripcion']?></p>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalform"><i class="bi bi-briefcase mr-1"></i> Postular</button>
            </div>
            </div>
      
          
     <?php } }else{
       #pondre alguna targeta que indique que ya no hay 
     }?>

    
     
    </div>
    <!--Formulario flotante para enviar solicitud-->
<div class="modal fade" tabindex="-1" id="modalform">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-bottom-warning">
        <h4 class="modla-title">Postularte</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span>&times;</span>
        </button>
      </div>
<div class="modal-body d-print-inline-block">
      <form action="index.php" method="post">
        <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre"  id="">
    </div>
    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" name="correo" id="" class="form-control" placeholder="Ingresa tu correo electronico valido " required>
    </div>
    <div class="form-group">
        <label for="cv">C.V.</label>
        <input type="file" name="cv" class="form-control-file" class="form-control" id="" required>
    </div>
    <div class="form-group">
        <label for="numero">Telefono</label>
        <input type="number" name="numero" class="form-control" placeholder="Ingresa tu numero telefononico valido " id="" required>
        </div>
        <button class="btn btn-success" type="submit"><i class="bi bi-file-earmark-font"></i>Enviar</button>
      </form>
</div>
<div class="modal-footer">
  <h3>Aqui puede ir algo mas </h3>
</div>
    </div>
  </div>

</div>
   


</div>
<?php
include "views/components/footer.php";
?>