<?php
include("./components/header.html");



//<!--Carrusel-->
include('./components/navegador.html');




?>
<div class="container mx-auto bg-light">
<div class="card mx-auto" style="width: 80%;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<script>
const logo= document.getElementById('logo-nav');
  logo.setAttribute('src','./images/logo.png');
  const stylesCss = document.getElementById('stylesCSS');
  stylesCss.setAttribute('href','./index.css');
</script>
<?php
    include('views/components/footer.html');

?>