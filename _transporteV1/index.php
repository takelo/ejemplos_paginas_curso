    <?php include_once "includes/templates/header.php" ?>

  <main>

    <div  id="promociones" class="pad-top-40">

      <h2>Nuestros servicios</h2>
      <div class="separador">
        <i class="fas fa-concierge-bell"></i>
      </div>
      <!-- <div class="container"> -->
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
              <!-- <p class="h4">Lorem Ipsum</p> -->
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis diam a tellus convallis sodales. Ut et rutrum erat, commodo malesuada risus.</p> -->
              <a href="#servicios" class="btn btn-secondary ancla">Contacto</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" alt="First slide">
            <div class="carousel-caption">
              <h2>Mas de 25 años en el rubro</h2>
              <!-- <img alt="menú 2x1" src="img/www.png"> -->
              <!-- <p class="h4">Lorem Ipsum</p> -->
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis diam a tellus convallis sodales. Ut et rutrum erat, commodo malesuada risus.</p> -->
              <a href="#servicios" class="btn btn-secondary ancla">Contacto</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" alt="First slide">
            <div class="carousel-caption">
              <h2>Trabajamos contrarembolso</h2>
              <!-- <img alt="menú 2x1" src="img/www.png"> -->
              <!-- <p class="h4">Lorem Ipsum</p> -->
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis diam a tellus convallis sodales. Ut et rutrum erat, commodo malesuada risus.</p> -->
              <a href="#servicios" class="btn btn-secondary ancla">Contacto</a>
            </div>
          </div>
        </div>
      </div>
    <!-- </div><!-- container -->
  </div><!-- promociones -->
  <!-- unidades -->
  <section class="invitados container seccion">
    <!-- <h2 id="productos">Otros de nuestros servicios</h2> -->
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/1.jpg" alt="imagen invitado">
          <p>Seguridad</p>
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
    <section id="presupuesto" class="pad-top-20 clearfix">
        <!-- <h2>Presupuesto online</h2> -->
        <div class="imagen">
          <img src="img/foto_presupuesto.jpg" alt="foto">
        </div>
        <div class="formulario">
          <h2>Presupuesto online</h2>
          <p>Completa con tus datos y recibi tu presupuesto online</p>
          <form action="https://formspree.io/factorzero@gmail.com" method="POST">
            <div class="form-group" >
              <label for="nombre">Empresa:</label>
              <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Empresa/Razon social">
            </div>
            <div class="form-group" >
              <label for="nombre">Origen:</label>
              <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Origen">
            </div>
            <div class="form-group" >
              <label for="nombre">Destino:</label>
              <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Destino">
            </div>
            <div class="form-group" >
              <label for="nombre">Medidas:</label>
              <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Medidas aprox.">
            </div>
            <div class="form-group" >
              <label for="nombre">Peso:</label>
              <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Peso aprox">
            </div>
            <div class="form-group">
              <label for="mail">Valor:</label>
              <input type="email" id="mail" class="form-control" name="mail" placeholder="Valor aprox.">
            </div>
            <div class="form-group">
              <label for="mail">Contacto:</label>
              <input type="email" id="mail" class="form-control" name="mail" placeholder="Tu nombre">
            </div>
            <div class="form-group">
              <label for="mail">Mail:</label>
              <input type="email" id="mail" class="form-control" name="mail" placeholder="Tu mail">
            </div>
            <div class="form-group areatexto">
              <label for="nombre">Descripcion:</label>
              <textarea class="form-control areatexto" name="mensaje" placeholder="Otros detalles..."></textarea>
            </div>
            <div class="center">
              <input type="submit" value="Enviar" class="boton">
            </div>
          </form>
        </div>
    </section> <!--presupuesto-->

    <!-- mapa -->
    <section id="destinos" class="pad-top-20">
      <h2>Nuestros destinos mas frecuentes</h2>
      <div class="separador">
        <i class="fas fa-map-marked-alt"></i>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="mapa">
              <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1eN9Dv7BxJzF4nqNIEVu1ymIki0Tgmn6a" width="100%" height="480"></iframe>
            </div>
          </div>
          <div class="col-md-3 destinos-frecuentes">
            <h3>Destinos frecuentes</h3>
            <ul>
              <li>San Jose</li>
              <li>San Luis</li>
              <li>Cordoba</li>
              <li>Bariloche</li>
              <li>Mendoza</li>
              <li>Santa Fe</li>
            </ul>
            <h3>Otros destinos</h3>
            <ul>
              <li>Tucuman</li>
              <li>Merlo</li>
              <li>Concordia</li>
              <li>Villaguay</li>
              <li>Paisandu</li>
              <li>Hernandarias</li>
            </ul>

          </div>
        </div>
      </div>
    </section><!-- fin mapa -->

    <!-- formulario contacto -->
    <div id="contacto" class="container caja pad-top-40">
        <h2>Contacto</h2>
        <p>Si necesitas ponerte encontacto con nosotros envianos un mensaje</p>
        <form action="https://formspree.io/factorzero@gmail.com" method="POST" class="contact_form clearfix">
          <div class="campo clearfix" >
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Tu Nombre">
          </div>
          <div class="campo clearfix">
            <label for="mail">Mail:</label>
            <input type="email" id="mail" class="form-control" name="mail" placeholder="Tu mail">
          </div>
          <div class="campo">
            <label for="nombre">Mensaje:</label>
            <textarea name="mensaje" class="form-control"></textarea>
          </div>
          <div class="center">
            <input type="submit" value="Enviar" class="boton">
          </div>
        </form>
     </div>

     <!-- historia -->
     <section id="local" class="pad-top-40">
       <h2 id="nosotros">Sobre nosotros</h2>
       <div class="separador">
         <i class="fas fa-book"></i>
       </div>
       <div class="empresa parallax">
         <div class="contenido">
           <p class="borde-letra">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis diam a tellus convallis sodales. Ut et rutrum erat, commodo malesuada risus. Nullam in arcu nec risus finibus venenatis. Integer sed nunc mi. Curabitur id odio convallis, interdum magna quis, venenatis enim. Nulla sodales sapien congue dictum mollis. Maecenas eu sapien enim. Quisque vestibulum tincidunt venenatis. Phasellus a varius sapien, eu consequat ligula. Cras consectetur finibus condimentum. Cras imperdiet felis eget leo cursus iaculis.
 Ut libero turpis, fermentum at pellentesque non, congue eu purus. Morbi fringilla sapien eget est faucibus ornare. Phasellus nunc ipsum, ultrices sit amet aliquet non, ultricies eget nunc. Fusce et viverra sapien. In sed varius enim, vitae rhoncus tellus. Integer ante sapien, tincidunt sed luctus lacinia, feugiat eu augue. Curabitur hendrerit tellus eget nunc ornare sollicitudin. Nullam tincidunt est et mi sollicitudin tristique.
 Donec pellentesque elementum elit in cursus. Donec a augue non dolor venenatis congue non vitae ex. Curabitur id leo urna.</p>
         </div>
       </div>
     </section>
     <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero">0</p>Flota</li>
        <li><p class="numero">0</p>Comercios abarcados</li>
        <li><p class="numero">0</p>Ciudades</li>
        <li><p class="numero">0</p>Años de experiencia</li>
      </ul>
    </div>
  </div> <!--parallax-->



</main>


    <?php include_once "includes/templates/footer.php" ?>
