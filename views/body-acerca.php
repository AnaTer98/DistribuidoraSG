
  <?php
    include('./components/header.html'); 
    include('./components/navegador.php'); 
  ?>

    

  <script>
        const logo=document.getElementById('logo-nav');
        logo.setAttribute('src','./images/logo.png');

        const stylesCss = document.getElementById('stylesCSS');
        stylesCss.setAttribute('href','./index.css');
  </script>


  <?php
    include('./components/footer.html');
  ?>
