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

  // scroll lento
  $('.ancla').click(function(){
    var link = $(this);
    var anchor  = link.attr('href');
    $('html, body').stop().animate({
        scrollTop: jQuery(anchor).offset().top - alturaBarra
    }, 2000);
    return false;
  });

  //menu fijo y cambio de tamaño
   $(window).scroll(function(){
     var scroll = $(window).scrollTop();
     if(scroll > 1){
       $(".barra").addClass("barra-small");
       $(".logo img").attr("src","img/logo.png");
       $(".logo").addClass("reduce");
       $(".logo").addClass("pad-top-40");
       $(".barra").css({"margin-top": "-40px"});
       $(".marca").hide();
       // console.log("estoy");
       // $(".barra").css({"height": alturaBarra-80});
       $(".navegacion-principal").removeClass("pad-top-40");
       if($(window).width() <= 990) {
         // alert("entro");
         // alturaBarra = $(".barra").innerHeight();
         // $(".barra").css({"height": alturaBarra});
         $(".hamburger").addClass('bajo');
         $(".navegacion-principal").addClass("pad-top-40");
       }
       //sino escondo
       }else{
         $(".navegacion-principal").addClass("pad-top-40");
         $(".barra").css({"margin-top": "0"});
         // $(".barra").css({"height": alturaBarra});
         $(".barra").removeClass("barra-small");
         $(".logo img").attr("src","img/logo2.png");
         $(".logo").removeClass("reduce");
         $(".logo").removeClass("pad-top-40");
         if($(window).width() > 990) {
           $(".marca").show();
         }else {
           $(".hamburger").removeClass('bajo');
           $(".navegacion-principal").removeClass("pad-top-40");
         }

         /*$(".logo").removeClass("pad-top-10");
         $(".navegacion-principal").removeClass("reduce");
         $(".navegacion-principal").removeClass("pad-top-10");
         $(".hamburger").removeClass("reduce");
         $(".hamburger").removeClass("pad-top-20");*/
       }
   });//barra movil

   // menu movil
   $(".hamburger").click(function(){
     $(".hamburger").toggleClass('open');
     $(".hamburger").toggleClass("pad-top-10");
     $(".navegacion-principal a:nth-child(4)").toggle();
     $(".logo").toggle();
     $(".barra").toggleClass('open');
     $(".navegacion-principal").toggle();
     $(".barra").toggleClass('transparente');
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


   //lettering
   // $(".nombre-sitio").lettering();
   // $(".char1").fadeIn(1000);
   // $(".char2").fadeIn(1500);
   // $(".char3").fadeIn(2000);
   // $(".char4").fadeIn(2500);
   // $(".char5").fadeIn(3000);
   // $(".char6").fadeIn(3500);
   $("div.informacion p").fadeIn(3300);

});//lave document ready
