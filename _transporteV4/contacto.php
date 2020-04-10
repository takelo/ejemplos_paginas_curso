    <?php include_once "includes/templates/header.php" ?>
    <input id="pageId" name="pageId" type="hidden" value="contacto">
    <div class="heroSmall">
      <div class="nombreSeccion">
        <p><span>Contacto</span></p>
       </div>
    </div>
    </header>
  <main>


    <!-- info contacto -->
    <section id="informacion de contacto">
      <div class="container">
        <div class="row">
          <div class="col-xl-6">
            <div id="infoContacto">
              <div>
                  <!-- <h2>Informacion de <span> contacto</span><i class="fas fa-user-circle"></i></h2> -->
                  <h2>Informacion de <span> contacto</span></h2>
              </div>
              <p>Puede contactarse con nosotros a traves de los siguientes medios </p>
              <!-- <h3>Transporte <span>Rodriguez</span></h3> -->
              <ul>
                <li><i class="fas fa-map-marker-alt"></i>DIRECCION: Ricardo Balbin y Gobernador Enrique mihura</li>
                <li><i class="fas fa-envelope"></i>MAIL: <a href="#">transporterodriguez@hotmail.com</a></li>
                <li><i class="fas fa-phone"></i>TELEFONOS: <a href="tel:3434260252">343-4260252</a>/<a href="tel:3434260252">343-4599524</a></li>
                <li><i class="fas fa-clock"></i>HORARIOS: Lunes a Viernes – 8:00hs a 17:00hs</li>
              </ul>
            </div>
          </div>
          <div class="col-xl-6">
            <div id="contacto" class="container">
                <p>cualquier consulta complete el formulario y nos pondremos en contacto con usted.</p>
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
                    <textarea name="mensaje" class="form-control" placeholder="Tu mensaje"></textarea>
                  </div>
                  <div class="center">

                    <input type="submit" value="Enviar" class="boton">
                    <!-- <input type="submit" value="Enviar" class="btn btn-lg btn-primary"> -->
                  </div>
                </form>
             </div>

          </div>


        </div>

      </div>

    </section>

    <section id="ubicacion">
      <div class="separador">
          <h2>Nuestra <span>ubicacion</span><i class="fas fa-map-marker-alt"></i></h2>
      </div>
      <div id="mapaGoogle">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.4193662177267!2d-60.49286868484283!3d-31.786318881282458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b44d496c75a307%3A0xad96404e2df1b63b!2sTransporte+Rodriguez!5e0!3m2!1ses!2sar!4v1548078255606" allowfullscreen></iframe>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13566.786215730242!2d-60.5020999!3d-31.7787613!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5ab822e1765c2c2f!2sTransportes+Rodriguez+Signes!5e0!3m2!1ses!2sar!4v1547332588260" allowfullscreen></iframe> -->
      </div>
    </section>







</main>


    <?php include_once "includes/templates/footer.php" ?>
