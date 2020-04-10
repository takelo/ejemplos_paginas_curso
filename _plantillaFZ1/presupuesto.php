    <?php include_once "includes/templates/header.php" ?>
    <input id="pageId" name="pageId" type="hidden" value="presupuesto">

    <div class="heroSmall">
      <div class="nombreSeccion">
        <p><span>Presupuesto</span></p>
       </div>
    </div>
    </header>
  <main>






    <!-- formulario contacto -->
    <section id="presupuesto" class="pad-top-20 clearfix">
        <!-- <h2>Presupuesto online</h2> -->
        <div class="separador">
            <h2>Presupuesto <span>online</span>&nbsp;<i class="fas fa-mouse-pointer tada"></i></h2>
        </div>
        <div class="imagen">
          <img src="img/foto_presupuesto.jpg" alt="foto">
        </div>
        <div class="formulario">
          <!-- <h2 class="">Presupuesto online</h2> -->
          <p>Completa con tus datos y recibi tu presupuesto online</p>
          <form action="https://formspree.io/factorzero@gmail.com" method="POST">
            <div class="form-group" >
              <label for="nombre">Empresa:</label>
              <input type="text" id="empresa" class="form-control" name="empresa" placeholder="Nombre de la Empresa o Razon Social">
            </div>
            <div class="form-group" >
              <label for="nombre">Contacto:</label>
              <input type="text" id="persona" class="form-control" name="persona" placeholder="Nombre de la persona de contacto">
            </div>
            <div class="form-group" >
              <label for="nombre">Origen:</label>
              <input type="text" id="origen" class="form-control" name="origen" placeholder="Lugar de origen">
            </div>
            <div class="form-group" >
              <label for="nombre">Destino:</label>
              <input type="text" id="destino" class="form-control" name="destino" placeholder="Lugar de destino">
            </div>
            <div class="form-group" >
              <label for="nombre">Medidas:</label>
              <input type="text" id="medidas" class="form-control" name="medidas" placeholder="Medidas aproximadas">
            </div>
            <div class="form-group" >
              <label for="nombre">Peso:</label>
              <input type="text" id="peso" class="form-control" name="peso" placeholder="Peso aproximado">
            </div>
            <div class="form-group">
              <label for="mail">Valor:</label>
              <input type="text" id="valor" class="form-control" name="valor" placeholder="Valor aproximado">
            </div>

            <div class="form-group">
              <label for="mail">Mail:</label>
              <input type="email" id="mail" class="form-control" name="mail" placeholder="Mail de contacto">
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

    <!-- formulario contacto -->
    <!-- <div id="contacto" class="container caja pad-top-40">
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
     </div> -->


     <!-- <section id="contactoEnPresu">
       <div class="container">
         <div class="row">
           <div class="col-xl-6">
             <div id="infoContacto">
               <div>
                   <h2>Informacion de <span> contacto</span><i class="fas fa-user-circle"></i></h2>
               </div>
               <p>Podes contactarte con nosotros a travéz de los siguientes medios</p>
               <ul>
                 <li><i class="fas fa-map-marker-alt"></i>DIRECCION: Ricardo Balbin y Gobernador Enrique mihura</li>
                 <li><i class="fas fa-envelope"></i>MAIL: transporterodriguez@hotmail.com</li>
                 <li><i class="fas fa-phone"></i>TELEFONOS: 343-4260252/343-4599524</li>
                 <li><i class="fas fa-clock"></i>HORARIOS: Lun a Vie – 08hs a 12:30hs y 16hs a 19:30hs | Sáb – 08hs a 12:30hs</li>
               </ul>
             </div>
           </div>
           <div class="col-xl-6">
             <div id="contacto" class="container">
                 <p>O podes completar el formulario con tus datos y nosotros nos comunicamos con vos</p>
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
                   </div>
                 </form>
              </div>
           </div>
         </div>
       </div>
     </section> -->

</main>


    <?php include_once "includes/templates/footer.php" ?>
