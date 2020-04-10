$(document).ready(function() {

  //para que la barra se ponga blanca sino esta top??
  // $(window).scrollTop(0);

  //solo dios lo sabe
 //  var alturaBarra = $(".barra").innerHeight();
 //  var alturaVentana = $(window).height();
 //  $(window).resize(function(){
 //   alturaVentana = $(window).height();
 //   alturaBarra = $(".barra").innerHeight();
 // });

   // carusel
   jQuery('#slider-home').carousel({
     interval: 3000,
     pause: "hover"
   })
  $(".carousel-control-prev").click(function(){
      $("#slider-home").carousel("prev");
  });
  // Go to the previous item
  $(".carousel-control-next").click(function(){
      $("#slider-home").carousel("next");
  });

  //menu fijo y cambio de tamaño
   $(window).scroll(function(){
     var scroll = $(window).scrollTop();
     if(scroll > 1){
       if((/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
         $(".flotante").fadeIn(1000);
        }
       $(".barra").addClass("barra-small");
       $(".logo").addClass("reduce");
       $(".navegacion-principal").addClass("pad-top-20");
       $(".logo").addClass("pad-top-20");
       $(".hamburger").addClass("pad-top-50");
       }else{
         if((/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
           $(".flotante").fadeOut(1000);
          }
         $(".barra").removeClass("barra-small");
         $(".logo").removeClass("reduce");
         $(".navegacion-principal").removeClass("pad-top-20");
         $(".logo").removeClass("pad-top-20");
         $(".hamburger").removeClass("pad-top-50");
       }
   });

   // menu movil
   $(".hamburger").click(function(){
     $(".hamburger").toggleClass('open');
     $(".hamburger").toggleClass("pad-top-10");
     $(".barra").toggleClass('open');
     $(".navegacion-principal").toggle();
     // $(".barra").toggleClass('transparente');
 	});


  //Animacion numeros
if(document.getElementsByClassName("resumen-evento")){
  $(".resumen-evento").waypoint(function(){
    $(".resumen-evento li:nth-child(1) p").animateNumber({number:100},1200);
    $(".resumen-evento li:nth-child(2) p").animateNumber({number:50},1200);
    $(".resumen-evento li:nth-child(3) p").animateNumber({number:35},1500);
    // $(".resumen-evento li:nth-child(4) p").animateNumber({number:25},1500);
  }, {
    offset: "60%"
  });
}

//imagen presupuesto
if(document.getElementById("presupuesto")){
  $("#presupuesto").waypoint(function(){
    $("#presupuesto .imagen").fadeIn(3000);
  }, {
    offset: "60%"
  });
}

// animacion de logo nosotros
if(document.getElementsByClassName("logoNosotro")){
  $(".logoNosotro").waypoint(function(){
    $(".logoNosotro").css("transform", "rotateY(360deg)");
    $("#camion1").addClass("passing");
  }, {
    offset: "60%"
  });
}

// menu activo
//Programa conferencia
var pagina = document.getElementById("pageId").value;
if (pagina == "inicio"){
  $(".navegacion-principal a:nth-child(1)").addClass("activo");
}
if (pagina == "nosotros"){
  $(".navegacion-principal a:nth-child(2)").addClass("activo");
}
if (pagina == "servicios"){
  $(".navegacion-principal a:nth-child(3)").addClass("activo");
}
if (pagina == "presupuesto"){
  $(".navegacion-principal a:nth-child(4)").addClass("activo");
}
if (pagina == "destinos"){
  $(".navegacion-principal a:nth-child(5)").addClass("activo");
}
if (pagina == "contacto"){
  $(".navegacion-principal a:nth-child(6)").addClass("activo");
}
if (pagina == "novedades"){
  $(".navegacion-principal a:nth-child(7)").addClass("activo");
}
$("#presupuesto .boton").hover(function(){
  $("#presupuesto .boton").addClass("tada");
  }, function(){
    $("#presupuesto .boton").removeClass("tada");
  });



   //lettering
   // $(".nombre-sitio").lettering();
   // $(".char1").fadeIn(1000);
   // $(".char2").fadeIn(1500);
   // $(".char3").fadeIn(2000);
   // $(".char4").fadeIn(2500);
   // $(".char5").fadeIn(3000);
   // $(".char6").fadeIn(3500);
   $("div.isologo").fadeIn(1500);
   $("div.textoPortada").fadeIn(2800);

});//lave document ready
