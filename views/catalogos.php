<?php
session_start();
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="content bg-light mx-auto rounded col-8">
<div class="row row-cols-2 py-3 ">
    <div class="col">
        <a href="" class="text-muted ">
        <div class="card">
            <div class="card-header bg-light">
                <p class="card-title h5"> Catalogo Minorista</p>
            </div>
            <div class="card-body">
            <img src="escritorio.svg" class="card-img-bottom" alt="">
            </div>
        </div>
        </a>
    </div>
    <div class="col ">
<?php if(isset($_SESSION['usuario'])||!empty($_SESSION['usuario'])){?>
    <div class="card shadow-sm">
            <div class="card-header ">
                <p class="card-title">Catalogo Mayorista</p>
            </div>
            <div class="card-body">
            <img src="escritorio.svg" class="card-img-bottom" alt="">
            </div>
        </div>
        <?php }else{?>
            <div class="card border-0 bg-transparent col-10">
            <div class="card-header bg-light border-bottom-primary">
                <p class="card-title">¿No eres un cliente mayorista? </p>
            </div>
            <div class="card-body content-center">
                <p class="card-text ">No eres un cliente mayorista <br>Si te gustaría serlo, solicita tu cambio ahora</p>
            <button href="" class="btn btn-success mr-auto">Solicitar Catalogo</button>  
            </div>
        </div>
            <?php }?>
    </div>
</div>
</div>

<?php
include "views/components/footer.php";
?>
