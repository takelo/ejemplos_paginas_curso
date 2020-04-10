
(function(){
  'use strict'
  document.addEventListener('DOMContentLoaded', function(){

    //ID
    /*
    var logo = document.getElementById("logo");
    var navegacion = document.getElementById("navegacion");
    navegacion.style.display = "none";
    */

    //class
    /*
    var navegacion = document.getElementsByClassName("navegacion");
    console.log(navegacion[0]);

    var contenido = document.getElementsByClassName("contenido");
    console.log(contenido);
    contenido[0].style.display = "none";
    */

    //TAG
    /*
   var enlaces = document.getElementsByTagName('a');
   console.log(enlaces);
   console.log(enlaces.length);

   for (var i = 0; i < enlaces.length;i++){
     enlaces[i].setAttribute("target","_blank");
   }

   var enlacesSidebar = document.getElementById("sidebar").getElementsByTagName("a");
   console.log(enlacesSidebar);

   for (var i = 0; i < enlacesSidebar.length;i++){
    enlacesSidebar[i].setAttribute("href","http://google.com");
   }
*/
//querySelector
/*
   var logo = document.querySelector("#logo");
   console.log(logo);

   var encabezado = document.querySelector("aside h2");
   console.log(encabezado);

   var encabezados = document.querySelectorAll("h2, footer p");
   console.log(encabezados);

var enlaces = document.querySelectorAll("a");
console.log(enlaces);

for(var i = 0 ; i < enlaces.length ; i++){
  console.log.length(enlaces[i].innerText);
}
*/
//atributos de los nodos
/*
var enlaces = document.querySelectorAll("#menu ul li a")[0];
console.log(enlaces.nodeType);
console.log(enlaces.nodeName);
console.log(enlaces.attributes);
console.log(enlaces.attributes[0]);
console.log(enlaces.firstChild);
console.log(enlaces.firstChild.nodeValue);

enlaces.firstChild.nodeValue = "Home";
enlaces.id = "mi_id";
*/

//Creando contenido
/*
var sidebar = document.querySelector("#sidebar");
var nuevoElemento = document.createElement("H1");
var nuevoTexto = document.createTextNode("Hola mundo");
nuevoElemento.appendChild(nuevoTexto);
sidebar.appendChild(nuevoElemento);

//agregar entrada 6
var enlacesSidebar = document.querySelectorAll("#sidebar ul");
//creando el enlace
var nuevoEnlace = document.createElement("A");
nuevoEnlace.setAttribute("href", "https://www.facebook.com");
var textoEnlace = document.createTextNode("Entrada 6");
nuevoEnlace.appendChild(textoEnlace);
//creando la lista
var nuevaLista = document.createElement('LI');
nuevaLista.appendChild(nuevoEnlace);
// lo agregamos al menu
enlacesSidebar[0].appendChild(nuevaLista);
*/
//Clonando
/*
var contenido = document.querySelectorAll("main");
var nuevoContenido = contenido[0].cloneNode(true);

var sidebar = document.querySelector("aside");
sidebar.insertBefore(nuevoContenido, sidebar.childNodes[5]);
*/

//mas clon
/*
var sidebar = document.querySelector("aside");
var masVisitados = document.createElement("H2");
var textoVisitados = document.createTextNode("Post mas visitados");
masVisitados.appendChild(textoVisitados);
sidebar.insertBefore(masVisitados, sidebar.childNodes[0]);

var contenido = document.querySelectorAll("main h2");

for (var i = 0 ; i < contenido.length ; i++){
  var nuevoElemento = document.createElement("LI");
  var nuevoTexto = document.createTextNode(contenido[i].firstChild.nodeValue);
  nuevoElemento.appendChild(nuevoTexto);
  sidebar.insertBefore(nuevoElemento,sidebar.childNodes[1]);
}
*/
//eliminar
/*
var primerPost = document.querySelector("main article");
primerPost.parentNode.removeChild(primerPost);

var enlaces = document.querySelectorAll("#navegacion nav ul li a");
enlaces[10].parentNode.removeChild(enlaces[10]);
*/

//remplazar

var viejoNodo = document.querySelector("main h2");
var nodoNuevo = document.querySelector("footer h2");
viejoNodo.parentNode.replaceChild(nodoNuevo, viejoNodo);

//remplazar con uevo elemento
/*
var nuevoTitulo = document.createElement("H2");
var nuevoTexto = document.createTextNode("Hola Mundo");
nuevoTitulo.appendChild(nuevoTexto);

var viejoNodo = document.querySelector("main h2");
viejoNodo.parentNode.replaceChild(nuevoTitulo, viejoNodo);
*/
  });
})();

