<?php
include("../components/header.html");
include("../components/navegador.php")
?>

<div class="mx-auto" style="height: 55rem;" id="form-registro">
    <div class="card text-black border border-success mx-auto " id="card-inresar-user" style="max-width: 80rem;">
     
        <form>
            <div class="form-group">
                <label for="nombre">Nombre de la vacante</label>
                <input type="" class="form-control" id="nombrevacante">
            </div>
            <div class="form-group">
                <label for="descrip">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="requeri">Requeriments</label>
                <textarea class="form-control" id="requeriments" rows="3"></textarea>
            </div>
        </form>


     </div>
</div>


<?php
    include('../components/footer.html');

?>

<script>
const logo= document.getElementById('logo-nav');
  logo.setAttribute('src','../images/logo.png');
  
  const stylesCss = document.getElementById('stylesCSS');
  stylesCss.setAttribute('href','../index.css');
</script>