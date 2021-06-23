
  <?php
    include('./components/header.html'); 
    include('./components/navegador.php'); 
  ?>

<div class="container">
 
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">¿Quienes somos?</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Vision</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mision</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
  
  
</div>
<!--Esto es para modificar -->
<div class="container">
  <div class="row">
    <div class="col-4"><br></div>
    <div class="col-4"><br></div>
    <div class="col-4"><br></div>



  </div>

</div>





  <?php
    include('./components/footer.html');
  ?>
  <script>
        const logo=document.getElementById('logo-nav');
        logo.setAttribute('src','./images/logo.png');
        const stylesCss = document.getElementById('stylesCSS');
        stylesCss.setAttribute('href','./index.css');

        $(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
console.log("document is ready");
  

  $( ".card" ).hover(
  function() {
    $(this).addClass('shadow-lg p-1').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg p-1');
  }
);
  
// document ready  
});
  </script>
  