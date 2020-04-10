    <?php include_once "includes/templates/header.php" ?>

  <main>
    <div  id="promociones" class="pad-top-40">
      <h2>Tu paginá web a medida</h2>
      <div id="slider-home" class="carousel slide contenedor" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slider-home" data-slide-to="0" class="active"></li>
          <li data-target="#slider-home" data-slide-to="1"></li>
          <li data-target="#slider-home" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="img/1.jpg" alt="First slide">
            <div class="carousel-caption">
              <h2>Tu paginá web a medida</h2>
              <img alt="menú 2x1" src="img/www.png">
              <p class="h4">El diseño que eligas</p>
              <p>La presencia de tu empresa en internet es importante para que te encuentren y conseguir mas clientes.</p>
              <a href="#servicios" class="btn btn-secondary ancla">Contacto</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" alt="First slide">
            <div class="carousel-caption">
              <h2>Diseño 100% responsive</h2>
              <img alt="menú 2x1" src="img/www.png">
              <p class="h4">Diseño adaptable</p>
              <p>El diseño se adapta a cualquier dispositivo, celulares, tables o PC.</p>
              <a href="#servicios" class="btn btn-secondary ancla">Contacto</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" alt="First slide">
            <div class="carousel-caption">
              <h2>Proximamente Wordpress</h2>
              <img alt="menú 2x1" src="img/www.png">
              <p class="h4">Administra tu sitio con Wordpress</p>
              <p>Administra tu sitio agregando  las ultimas noticias.</p>
              <a href="#servicios" class="btn btn-secondary ancla">Contacto</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- contenedor -->

    <!-- empresa -->
    <section id="local" class="pad-top-40">
      <h2>Nuestro local</h2>
      <div class="empresa parallax">
        <div class="contenido">
          <p>Nuestro local se encuentra sobre calle Corrientes, esquina San lorenzo,
            frente a la ex fabrica de fosforos, un lugar clave de la ciudad de
            Paraná donde ahora podes encontrar la mejor carne de nuestra region
            en un lugar con la mejor atencion atendido por familia y amigos.
            En nuestro local vas a encontrar todo lo que necesitas para ese
            asado de finde semana, la mejor carne, la picada y el postre mas rico
            y los productos mas frescos de verduleria. Y durante la semana podes
          probar nuestras elaboraciones como pande carne, hamburgesas saborisadas
        y mucho mas.</p>
        </div>
      </div> <!--parallax-->
    </section>


    <!-- promociones -->
    <section id="servicios" class="container pad-top-40">
      <h2>Servicios</h2>
      <ul class="lista-productos clearfix">
        <li>
          <div class="producto">
            <img src="img/servicio1.jpg" alt="imagen producto">
            <p>Carniceria</p>
          </div>
          <p>La mejor carne la encontras en Raices. Costillas y vacio de ternera
          o novillo, matambres de vaca o chancho, corderos y achuras.
       Tambien productos eleborados como pamplonas o
      o hamburgesas rellenas, ademas de cortes especiales y roastbeef.</p>
        </li>
        <li>
          <div class="producto">
            <img src="img/servicio2.jpg" alt="imagen producto">
            <p>Verduleria</p>
          </div>
          <p>Los productos mas frescos de verduleria tambien los encontras
            en Raices, al mejor precio directo del mercado y con la mejor seleccion. </p>
        </li>
        <li>
          <div class="producto">
            <img src="img/servicio3.jpg" alt="imagen producto">
            <p>Quesos, fiambres y mas</p>
          </div>
          <p>El acompaniamiento mas rico tambien lo conseguis aca, gran
          variedad de marcas de fiambre, el queso mas rico, tambien productos
        elaborados como empanadas, tartas y pizzas. Ademas gran variedad de
      vinos, cervesas y bebidas.</p>
        </li>
      </ul>
    </section><!--productos-->

    <!-- mapa -->
    <section id="ubicacion">
      <h2>Ubicacion</h2>
      <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1293.1520443957133!2d2.6473606688107156!3d39.567471172263886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1479334018963" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section><!-- fin mapa -->

    <!-- formulario contacto -->
    <div id="contacto" class="container caja pad-top-40">
        <h2>Contacto</h2>
        <form action="https://formspree.io/factorzero@gmail.com" method="POST" class="contact_form clearfix">
          <div class="campo clearfix" >
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
          </div>
          <div class="campo clearfix">
            <label for="mail">Mail:</label>
            <input type="email" id="mail" name="mail" placeholder="Tu mail">
          </div>
          <div class="campo">
            <label for="nombre">Mensaje:</label>
            <textarea name="mensaje"></textarea>
          </div>
          <div class="center">
            <input type="submit" value="Send" class="boton">
          </div>

        </form>
      </div>



</main>


    <?php include_once "includes/templates/footer.php" ?>
