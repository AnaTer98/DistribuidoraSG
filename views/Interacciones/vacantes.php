<?php
include("../components/header.html");
include("../components/navegador.php")
?>

<div class="row col-10 mx-auto rounded bg-light">
<form class="mx-auto p-4 col-11 ">
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