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
                <p class="card-title h5"> Catalogo</p>
            </div>
            <div class="card-body">
            <img src="escritorio.svg" class="card-img-bottom" alt="">
            </div>
        </div>
        </a>
    </div>
    <div class="col ">
    <div class="card">
            <div class="card-header bg-light">
                <p class="card-title">Catalogo Mayorista</p>
            </div>
            <div class="card-body">
            <img src="escritorio.svg" class="card-img-bottom" alt="">
            </div>
        </div>
    </div>
</div>
</div>

<?php
include "views/components/footer.php";
?>
