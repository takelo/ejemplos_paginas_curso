$(document).ready(function() {

  //para que la barra se ponga blanca sino esta top??
  $(window).scrollTop(0);

  //solo dios lo sabe
  var alturaBarra = $(".barra").innerHeight();
  var alturaVentana = $(window).height();
  $(window).resize(function(){
   alturaVentana = $(window).height();
   alturaBarra = $(".barra").innerHeight();
 });

 // carusel
 jQuery('#slider-home').carousel({
   interval: 6000,
   pause: "hover"
 })

 // Go to the previous item
$(".carousel-control-prev").click(function(){
    $("#slider-home").carousel("prev");
});
// Go to the previous item
$(".carousel-control-next").click(function(){
    $("#slider-home").carousel("next");
});
  // scroll lento
  $('.ancla').click(function(){
    var link = $(this);
    var anchor  = link.attr('href');
    $('html, body').stop().animate({
        scrollTop: jQuery(anchor).offset().top - 100
    }, 2000);
    return false;
  });

  //menu fijo y cambio de tamaño
   $(window).scroll(function(){
     var scroll = $(window).scrollTop();
     if(scroll > 1){
       $(".barra").addClass("barra-small");
       $(".logo").addClass("reduce");
       $(".navegacion-principal").addClass("pad-top-20");
       $(".logo").addClass("pad-top-20");
       $(".hamburger").addClass("pad-top-50");
       }else{
         $(".barra").removeClass("barra-small");
         $(".logo").removeClass("reduce");
         $(".navegacion-principal").removeClass("pad-top-20");
         $(".logo").removeClass("pad-top-20");
         $(".hamburger").removeClass("pad-top-50");
       }
   });//barra movil

   // menu movil
   $(".hamburger").click(function(){
     $(".hamburger").toggleClass('open');
     $(".hamburger").toggleClass("pad-top-10");
     // $(".navegacion-principal a:nth-child(4)").toggle();
     // $(".logo").toggle();
     $(".barra").toggleClass('open');
     $(".navegacion-principal").toggle();
     $(".barra").toggleClass('transparente');
 	});
  // ver Mas
  $("#verHistoria").click(function(event){
    event.preventDefault();
    $("#historiaCorta").hide();
    $("#historiaLarga").css({"display": "table-cell"});
 });
 $("#ocultarHistoria").click(function(event){
   event.preventDefault();
   $("#historiaLarga").hide();
   $("#historiaCorta").css({"display": "table-cell"});
});

  //Animacion numeros
if(document.getElementsByClassName("resumen-evento")){
  $(".resumen-evento").waypoint(function(){
    $(".resumen-evento li:nth-child(1) p").animateNumber({number:40},1200);
    $(".resumen-evento li:nth-child(2) p").animateNumber({number:300},1200);
    $(".resumen-evento li:nth-child(3) p").animateNumber({number:15},1500);
    $(".resumen-evento li:nth-child(4) p").animateNumber({number:25},1500);
  }, {
    offset: "60%"
  });
}

// animacion entrada titulos

//imagen presupuesto
if(document.getElementById("presupuesto")){
  $("#presupuesto").waypoint(function(){
    // console.log("atr presu");
    // $("#presupuesto .imagen").addClass('visible');
    // $("#presupuesto .formulario .form-group").slideToggle(300);
    $("#presupuesto .imagen").slideDown();
  }, {
    offset: "60%"
  });
}


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
