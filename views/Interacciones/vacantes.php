<?php
include("../components/header.html");
include("../components/navegador.php")
?>



<div class="card mx-auto "style="max-width: 20rem;">
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de la vacante</label>
    <input type="" class="form-control" id="nombrevacante">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Requeriments</label>
    <textarea class="form-control" id="requeriments" rows="3"></textarea>
  </div>
</form>

</div>


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


<!--Otro-->
<div class="row col-10 mx-auto bg-light">
<form class="mx-auto p-4 col-11">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de la vacante</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Vendedor">
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Requeriments</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
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