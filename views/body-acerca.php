
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



<div class="panel-primary hover-shadow" style:"border: 20px">
  <div
    class="mask"
    style="
      background-image: linear-gradient(110deg, #c6ebff 0, #72afdd 50%, #0076b3 100%);"
  >
  <div class="content-box">
         ¿QUIENES SOMOS?<br><br>
        </div>
        <div class="content-box">

          Somos una distribuidora que trabaja bajo un sistema de gestión de compras y ventas para clientes mayoristas 
          de la zona Metropolitana, que mediante la difusión en redes sociales y nuestra página de oficial de internet 
          damos a conocer productos y servicios en el ramo de las comunicaciones y tecnología. Fijando su flujo de trabajo 
          y distribución en el ámbito virtual y digital.<br><br>

          Nos encontramos ubicados en C. Xicoténcatl #6 A Col. Reynosa Tamaulipas, Azcapotzalco, Ciudad de México.
          *HIDALGO (Tulancingo) – 3ª cerrada del tezontle casa 12 fraccionamiento Vista Real 
          Donde realizamos la gestión de pedidos, almacenamiento, logística y cuestiones administrativas de recursos materiales 
          y humanos, esto con el fin de brindar seguridad y confianza ante los clientes, socios y la gente que se encuentre 
          trabajando con nosotros, garantizando así la calidad que caracteriza de manera significativa a distribuidora SG ante 
          un número importante de proveedores de la zona Metropolitana y sus alrededores.

        </div>
  </div>
  </div>
  <br><br>
  <?php
    include('./components/footer.html');
  ?>
