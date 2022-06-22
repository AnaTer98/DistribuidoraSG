<?php
session_start();
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="content bg-light mx-auto rounded col-8">
<div class="row row-cols-2 py-3 ">
  
    <div class="col">
    <?php var_dump($data['catalogos']);if($data['catalogos']["menudeo"] !== NULL ){ ?>
    <a href="<?= $data['catalogos']['menudeo']?>" class="text-muted ">
        <div class="card">
            <div class="card-header bg-light">
                <p class="card-title h5"> Catalogo Minorista</p>
            </div>
            <div class="card-body">
            <img src="catalogo.png" class="card-img-bottom w-50 mx-auto" alt="">
            </div>
        </div>
        </a>
    

    <?php }else{?>
       
        <div class="card">
            <div class="card-header  border-bottom-info">
                <p class="card-title h5"> Catalogo Minorista</p>
            </div>
            <div class="card-body text-center">
            <img src="advertencia.png" class="card-img-bottom w-50 mx-auto" alt="">
            <p class="h5">Por el momento no hay catalogo disponible vuelba mas tarde!</p>
            </div>
        </div>
      
        <?php }?>
    </div>
    <div class="col ">
    
<?php if( (isset($_SESSION['usuario'])||!empty($_SESSION['usuario'])) && ($_SESSION['usuario'][1] == "mayoreo")){ if ($data['catalogos']['mayoreo'] !== NULL){  ?>
    <div class="card shadow-sm">
            <div class="card-header ">
                <p class="card-title">Catalogo Mayorista</p>
            </div>
            <div class="card-body">
            <img src="catalogo.png" class="card-img-bottom w-50 mx-auto" alt="">
            </div>
        </div>
        <?php }else{?>
            <div class="card">
            <div class="card-header  border-bottom-info">
                <p class="card-title h5"> Catalogo Mayorista</p>
            </div>
            <div class="card-body text-center">
            <img src="advertencia.png" class="card-img-bottom w-50 mx-auto" alt="">
            <p class="h5">Por el momento no hay catalogo disponible vuelba mas tarde!</p>
            </div>
        </div>
        <?php }}else{ ?>
            <div class="card border-0 bg-transparent col-10">
            <div class="card-header bg-light border-bottom-primary">
                <p class="card-title">¿No eres un cliente mayorista? </p>
            </div>
            <div class="card-body content-center">
                <p class="card-text ">No eres un cliente mayorista <br>Te gustaría serlo, solicita tu cambio ahora</p>
            <a href="index.php?c=acciones&a=" class="btn btn-outline-success w-60 "><i class="bi bi-journal-arrow-up mr-1"></i>Solicitar Catalogo</a>
            </div>
        </div>
            <?php }?>
    </div>
</div>
</div>

<?php
include "views/components/footer.php";
?>
