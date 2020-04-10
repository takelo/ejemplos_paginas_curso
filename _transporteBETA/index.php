    <?php include_once "includes/templates/header.php" ?>

  <main>
    <!-- historia -->
    <section id="local" class="pad-top-40">
      <div class="separador">
        <i class="fas fa-book"></i>
      </div>
      <h2>Nosotros</h2>

      <div class="empresa parallax">
        <div class="contenido">
          <p class="borde-letra">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis diam a tellus convallis sodales. Ut et rutrum erat, commodo malesuada risus. Nullam in arcu nec risus finibus venenatis. Integer sed nunc mi. Curabitur id odio convallis, interdum magna quis, venenatis enim. Nulla sodales sapien congue dictum mollis. Maecenas eu sapien enim. Quisque vestibulum tincidunt venenatis. Phasellus a varius sapien, eu consequat ligula. Cras consectetur finibus condimentum. Cras imperdiet felis eget leo cursus iaculis.
Ut libero turpis, fermentum at pellentesque non, congue eu purus. Morbi fringilla sapien eget est faucibus ornare. Phasellus nunc ipsum, ultrices sit amet aliquet non, ultricies eget nunc. Fusce et viverra sapien. In sed varius enim, vitae rhoncus tellus. Integer ante sapien, tincidunt sed luctus lacinia, feugiat eu augue. Curabitur hendrerit tellus eget nunc ornare sollicitudin. Nullam tincidunt est et mi sollicitudin tristique.
Donec pellentesque elementum elit in cursus. Donec a augue non dolor venenatis congue non vitae ex. Curabitur id leo urna.</p>
        </div>
      </div> <!--parallax-->
    </section>


    <div  id="promociones" class="pad-top-40">
      <div class="separador">
        <i class="fas fa-concierge-bell"></i>
      </div>
      <h2>Servicios</h2>

      <div class="container">
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
              <h2>Servicio puerta a puerta</h2>
              <!-- <img alt="menú 2x1" src="img/www.png"> -->
              <p class="h4">Lorem Ipsum</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis diam a tellus convallis sodales. Ut et rutrum erat, commodo malesuada risus.</p>
              <a href="#servicios" class="btn btn-secondary ancla">Contacto</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" alt="First slide">
            <div class="carousel-caption">
              <h2>Mas de 25 años en el rubro</h2>
              <!-- <img alt="menú 2x1" src="img/www.png"> -->
              <p class="h4">Lorem Ipsum</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis diam a tellus convallis sodales. Ut et rutrum erat, commodo malesuada risus.</p>
              <a href="#servicios" class="btn btn-secondary ancla">Contacto</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" alt="First slide">
            <div class="carousel-caption">
              <h2>Servicio contrarembolso</h2>
              <!-- <img alt="menú 2x1" src="img/www.png"> -->
              <p class="h4">Lorem Ipsum</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis diam a tellus convallis sodales. Ut et rutrum erat, commodo malesuada risus.</p>
              <a href="#servicios" class="btn btn-secondary ancla">Contacto</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- container -->
  </div><!-- promociones -->
  <!-- unidades -->
  <section class="invitados container seccion">
    <h2>Más servicios</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/1.jpg" alt="imagen invitado">
          <p>Logistica</p>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tortor ante, nec elementum mauris suscipit eu. Sed tempus pulvinar quam, quis sodales ligula pharetra ac. Praesent ut augue lobortis, dictum tortor dignissim, sodales velit. Praesent fermentum consectetur augue vel feugiat. Curabitur dictum feugiat mattis.</p>
      </li>
      <li>
        <div class="invitado">
          <img src="img/2.jpg" alt="imagen invitado">
          <p>Calidad</p>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tortor ante, nec elementum mauris suscipit eu. Sed tempus pulvinar quam, quis sodales ligula pharetra ac. Praesent ut augue lobortis, dictum tortor dignissim, sodales velit. Praesent fermentum consectetur augue vel feugiat. Curabitur dictum feugiat mattis.</p>
      </li>
      <li>
        <div class="invitado">
          <img src="img/3.jpg" alt="imagen invitado">
          <p>Compromiso</p>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tortor ante, nec elementum mauris suscipit eu. Sed tempus pulvinar quam, quis sodales ligula pharetra ac. Praesent ut augue lobortis, dictum tortor dignissim, sodales velit. Praesent fermentum consectetur augue vel feugiat. Curabitur dictum feugiat mattis.</p>
      </li>
    </ul>
  </section><!--invitados-->

    <!-- formulario contacto -->
    <div id="presupuesto" class="pad-top-40">
        <h2>Presupuesto</h2>
        <form action="https://formspree.io/factorzero@gmail.com" method="POST" class="contact_form clearfix caja container">
          <div class="campo clearfix" >
            <label for="nombre">Empresa:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
          </div>
          <div class="campo clearfix" >
            <label for="nombre">Origen:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
          </div>
          <div class="campo clearfix" >
            <label for="nombre">Destino:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
          </div>
          <div class="campo clearfix" >
            <label for="nombre">Medidas:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
          </div>
          <div class="campo clearfix" >
            <label for="nombre">Peso:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
          </div>
          <div class="campo clearfix">
            <label for="mail">Valor:</label>
            <input type="email" id="mail" name="mail" placeholder="Tu mail">
          </div>
          <div class="campo clearfix">
            <label for="mail">Contacto:</label>
            <input type="email" id="mail" name="mail" placeholder="Tu mail">
          </div>
          <div class="campo clearfix">
            <label for="mail">Mail:</label>
            <input type="email" id="mail" name="mail" placeholder="Tu mail">
          </div>
          <div class="campo">
            <label for="nombre">Descripcion:</label>
            <textarea name="mensaje"></textarea>
          </div>
          <div class="center">
            <input type="submit" value="Send" class="boton">
          </div>
        </form>
      </div>

    <!-- mapa -->
    <section id="destinos" class="pad-top-20">
      <h2>Destinos</h2>
      <div class="separador">
        <i class="fas fa-map-marked-alt"></i>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Destinos frecuentes</h3>
            <ul>
              <li>SAN JOSE</li>
              <li>SAN LUIS</li>
              <li>CORDOBA</li>
              <li>BARILOCHE</li>
              <li>MENDOZA</li>
              <li>SANTA FE</li>
            </ul>
          </div>
          <div class="col-md-8">
            <div class="mapa">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1293.1520443957133!2d2.6473606688107156!3d39.567471172263886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1479334018963" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
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
