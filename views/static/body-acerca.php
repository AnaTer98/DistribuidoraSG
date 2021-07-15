<?php
include('../components/header.html');
include('../components/navegador.php');
?>

<div class="container">

  <div class="row">

    <div class="col-8 mb-2 mx-auto">
      <div class="card p-1">
        <img class="card-img-top" src="../images/somos.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">¿QUIENES SOMOS?</h5>
          <p class="">
            Somos una distribuidora que trabaja bajo un sistema de gestión de compras y ventas para clientes mayoristas de la zona Metropolitana, que mediante la difusión en redes sociales y nuestra página de oficial de internet damos a conocer productos y servicios en el ramo de las comunicaciones y tecnología.
             Fijando su flujo de trabajo y distribución en el ámbito virtual y digital.
            <p>
            Nos encontramos ubicados en C. Xicoténcatl #6 A Col. Reynosa Tamaulipas, Azcapotzalco, Ciudad de México.
            *HIDALGO (Tulancingo) – 3ª cerrada del tezontle casa 12 fraccionamiento Vista Real.
</p>
            Donde realizamos la gestión de pedidos, almacenamiento, logística y cuestiones administrativas de recursos materiales y humanos, esto con el fin de brindar seguridad y confianza ante los clientes, socios y la gente que se encuentre trabajando con nosotros, garantizando así la calidad que caracteriza de manera significativa a distribuidora SG ante un número importante de proveedores de la zona Metropolitana y sus alrededores.</p>
          <p class="card-text"><small class="text-muted">Alguna actualizacion</small></p>
        </div>
      </div>
    </div>

    <div class="col-6 mb-2">
      <div class="card p-1">
        <img class="card-img-top" src="../images/vision.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">VISIÓN</h5>
          <p class="card-text">VISIÓN
SER UNA EMPRESA LÍDER EN LA COMERCIALIZACIÓN Y DISTRIBUCIÓN DE NUESTROS PRODUCTOS Y SERVICIOS EN TELEFONÍA MÓVIL, DESTACANDO POR NUESTRO SERVICIO ANTE LAS NECESIDADES DE NUESTROS CLIENTES, SOCIOS Y CAPITAL HUMANO, BUSCANDO LA OBTENCIÓN DE UNA EXPANSIÓN EN MERCADO NACIONAL EN SENTIDO TECNOLÓGICO Y DE INNOVACIÓN.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

    <div class="col-6 mb-2">
      <div class="card p-1">
        <img class="card-img-top" src="../images/mision.jpg "alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">MISION</h5>
          <p class="card-text">
SOMOS UNA EMPRESA COMERCIALIZADORA Y DISTRIBUIDORA DE PRODUCTOS Y SERVICIOS EN EL ÁREA DE TELEFONÍA MÓVIL. 
CONFIABLE, EFICIENTE Y ORIENTADA A SATISFACER LAS NECESIDADES Y ASPIRACIONES DE NUESTROS CLIENTES Y SOCIOS.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

    <div class="col-6 mb-2 mx-auto">
      <div class="card p-1">
        <img class="card-img-top" src="../images/valores.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">NUESTROS VALORES</h5>
          <p class="card-text">
          <li>SERVICIO</li>
          <li> ÉTICA </li>
          <li>RESPONSABILIDAD</li>
          <li>HONESTIDAD</li>
          <li>PERSEVERANCIA</li>

</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
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
include('../components/footer.html');
?>
<script>
  /*  const logo=document.getElementById('logo-nav');
        logo.setAttribute('src','./images/logo.png');*/
  const stylesCss = document.getElementById('stylesCSS');
 stylesCss.setAttribute('href', '../index.css');

  $("#logo-nav").attr("src", "../images/logo.png");

  $(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
    console.log("document is ready");


    $(".card").hover(
      function() {
        $(this).addClass('shadow-lg ').css('cursor', 'pointer');
        $(this).removeClass('p-1');
      },
      function() {
        $(this).removeClass('shadow-lg ');
        $(this).addClass('p-1').css('cursor', 'pointer');
      }
    );

    // document ready  
  });
</script>