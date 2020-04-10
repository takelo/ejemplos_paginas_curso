  <?php include_once "includes/templates/header.php" ?>
  <input id="pageId" name="pageId" type="hidden" value="servicios">

  <div class="heroSmall">
    <div class="nombreSeccion">
      <p><span>Servicios</span></p>
     </div>
  </div>
  </header>
  <main>
    <!-- mapa -->
    <!-- servicios -->
    <section class="servicios">
      <div class="container">
        <div class="separador">
            <h2>Nuestros <span>Servicios</span><i class="fas fa-concierge-bell vertical"></i></h2>
        </div>
        <!-- <h2 id="productos">Otros de nuestros servicios</h2> -->
        <ul class="lista-servicios clearfix">
          <li>
            <div class="servicio">
              <img src="img/1.jpg" alt="imagen servicio">
              <p>Servicio Puerta a Puerta</p>
            </div>
            <p class="textoServicio">Hacemos retiros de mercaderia en Parana y Santa Fe con entregas a domicilio en toda la provincia de Misiones.</p>
          </li>
          <li>
            <div class="servicio">
              <img src="img/2.jpg" alt="imagen servicio">
              <p>CONTRAREEMBOLSO</p>
            </div>
            <p class="textoServicio">Hacemos servicio contra entrega para mayor facilidad en sus operaciones.</p>
          </li>
          <li>
            <div class="servicio">
              <img src="img/3.jpg" alt="imagen servicio">
              <p>CARGAS GENERALES</p>
            </div>
            <p class="textoServicio">Hacemos transporte de todo tipo de productos.</p>
          </li>
          <li>
            <div class="servicio">
              <img src="img/4.jpg" alt="imagen servicio">
              <p>SEGURIDAD</p>
            </div>
            <p class="textoServicio">Contamos con seguimiento satelital para mayor seguridad de sus envios.</p>
          </li>
        </ul>
      </div>
    </section><!--servicios-->

    <!-- <section id="historia" class="pad-top-40"> -->
      <div class="servicioPresu parallax">
        <div class="contenido contenedor">
          <p>Pedi tu presupuesto</p>
          <!-- <h3>Transporte Rodriguez</h3> -->
          <a href="presupuesto.php" class="button transparente">Presupuesto</a>
        </div>
      </div><!--newsleter-->
    <!-- </section> -->

  </main>

  <?php include_once "includes/templates/footer.php" ?>
