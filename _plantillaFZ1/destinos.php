  <?php include_once "includes/templates/header.php" ?>
  <input id="pageId" name="pageId" type="hidden" value="destinos">

  <div class="heroSmall">
    <div class="nombreSeccion">
      <p><span>Destinos</span></p>
     </div>
  </div>
  </header>
  <main>
    <!-- mapa -->
    <section id="destinos" class="pad-top-20">
      <div class="separador">
        <h2>Conocé nuestros <span>destinos</span><i id="icon1" class="fas fa-map-marked-alt tada"></i></h2>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="mapa">
                <img src="img/mapa.png" alt="mapa">
                <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1eN9Dv7BxJzF4nqNIEVu1ymIki0Tgmn6a" width="100%" height="480"></iframe> -->
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- <section id="historia" class="pad-top-40"> -->
      <div id="contactBanner" class="servicioPresu parallax">
        <div class="contenido contenedor">
          <p>Contactate con nosotros</p>
          <!-- <h3>Transporte Rodriguez</h3> -->
          <a href="contacto.php" class="button transparente">Contacto</a>
        </div>
      </div><!--newsleter-->
    <!-- </section> -->

  </main>

  <?php include_once "includes/templates/footer.php" ?>
