<?php
include("../components/header.html");
include("../components/navegador.php")
?>


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




<?php
    include('../components/footer.html');

?>

<script>
const logo= document.getElementById('logo-nav');
  logo.setAttribute('src','../images/logo.png');
  
  const stylesCss = document.getElementById('stylesCSS');
  stylesCss.setAttribute('href','../index.css');
</script>