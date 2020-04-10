$(document).ready(function() {
  //carrusel
/*  jQuery('#slider-home').carousel({
	  interval: 3000,
	  pause: "hover"
	});*/

  // hamburgesa
/*	$(".hamburger").click(function(){
    $(".hamburger").toggleClass('open');
    $(".barra").toggleClass('trasparente');
		$(".navegacion-principal").fadeToggle(1000);
	});*/
  // scroll lento
  var alturaBarra = $(".barra").innerHeight();
  $('.ancla').click(function(){
    var link = $(this);
    var anchor  = link.attr('href');
    $('html, body').stop().animate({
        scrollTop: jQuery(anchor).offset().top - alturaBarra
    }, 2000);
    return false;
  });

  //menu fijo
   var alturaVentana = $(window).height();
   alturaBarra = $(".barra").innerHeight();
   $(window).scroll(function(){
     var scroll = $(window).scrollTop();
     if(scroll > 1){
       $(".barra").addClass("barra-small");
       $(".logo img").attr("src","img/logo.png");
       $(".logo").addClass("reduce");
       $(".logo").addClass("pad-top-10");
       $(".barra").css({"margin-top": "-20px"});
       $(".barra").css({"height": alturaBarra-80});
       $(".marca").hide();
       if($(window).width() <= 1300) {
         // alert("entro");
         $(".barra").css({"height": alturaBarra-40});
         $(".hamburger").addClass('bajo');
         $(".navegacion-principal").addClass("pad-top-20");
       }
       //sino escondo
       }else{
         $(".barra").css({"margin-top": "0"});
         $(".barra").css({"height": alturaBarra});
         $(".barra").removeClass("barra-small");
         $(".logo img").attr("src","img/logo2.png");
         $(".logo").removeClass("reduce");
         $(".logo").removeClass("pad-top-10");
         if($(window).width() <= 1300) {
           $(".hamburger").removeClass('bajo');
           $(".navegacion-principal").removeClass("pad-top-20");
         }else $(".marca").show();

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
