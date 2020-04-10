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
              <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Empresa/Razon social">
            </div>
            <div class="form-group">
              <label for="mail">Contacto:</label>
              <input type="email" id="mail" class="form-control" name="mail" placeholder="Tu nombre">
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
              <input type="range" name="peso" id="peso" class="form-control"  list="pesos">
              <datalist id="pesos">
                <option value="0" label="0kg">
                <option value="10">
                <option value="20">
                <option value="30">
                <option value="40">
                <option value="50" label="50kg">
                <option value="60">
                <option value="70">
                <option value="80">
                <option value="90">
                <option value="100" label="100kg">
              </datalist>
              <!-- <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Peso aprox"> -->
            </div>
            <div class="form-group">
              <label for="mail">Valor:</label>
              <input type="email" id="mail" class="form-control" name="mail" placeholder="Valor aprox.">
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
