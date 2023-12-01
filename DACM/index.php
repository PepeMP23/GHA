<?php

/* Default background  */
$color1 = "#ffffff";

/* Active background  */
$color2 = "#efefef";

/* Rojo quedamo color   */
$color3 = "#631414";

/* Active color */
$color4 = "#002147";

/* Text color */
$color5 = "#000000";

/* Rojo color */
$color6 = "#c42626";

?>

<style>
.navbar {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

body {
    font-family: 'Montserrat', sans-serif;
    font-size: 0.9em;
}

h1 {
    font-size: 1.5em;
    margin-top: 0.4em;
}

h2 {
    font-size: 1.2em;
}

h3 {
    font-size: 1em;
}

a:link {
    color: <?=$color3 ?>;
}

a:visited {
    color: <?=$color3 ?>;
}

a:hover {
    color: <?=$color4 ?>;
}

a:active {
    color: <?=$color4 ?>;
}


.banner {
    background-color: <?=$color3 ?>;
    height: 380px;
    background-image: url('/imagenes/banner-productos-dacm-automatizacion.webp');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.espacioSuperior {
    height: 99px;
}

.icono {
    display: inline-block;
    padding: 5px;
    color: #FFF;
    font-size: 20px;
}

.iconorojo {
    font-size: 50px;
    color: <?=$color3 ?>;

}

.iconoanimado {
    box-sizing: content-box;
    width: 170px;
    height: 170px;
    background-color: #FFF;
    border: 15px solid #FFF;
    box-shadow: -1px 2px 10px 1px rgb(109 124 128 / 14%);
    border-radius: 50%;
}

#logo {
    width: 200px;
}

#logopiedepagina {
    display: block;
    width: 170px;
    margin: 0 auto;
}


#foto-oficinas {
    height: 450px;
}


#piedepagina {
    background: rgb(0,0,0);
    background: linear-gradient(156deg, rgba(0,0,0,1) 0%, rgba(99,20,20,1) 100%);
    overflow-y: hidden;
    padding-top: 100px;
}

.piedepagina a {
    color: #FFF;
}

.columna {
    padding-left: 0px;
    padding-right: 0px;
}

.linea {
    background-color: #000;
    height: 5px;
}

.linea2 {
    background-color: #000;
    height: 90px;
}

#botonWhatsApp {
    position: fixed;
    z-index: 1000;
    bottom: 25px;
    right: 25px;
    width: 50px;
}

#botonTelefono {
    position: fixed;
    z-index: 1000;
    bottom: 10px;
    right: 30px;
    font-size: 35px;
}

#return-botton-telefono {
    position: fixed;
    bottom: 18px;
    right: 27px;
    background: rgb(130 0 0);
    /*background: rgba(0, 0, 0, 0.7);*/
    width: 40px;
    height: 40px;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    font-size: 40px;
}

#return-botton-telefono i {
    color: #fff;
    margin: 0;
    position: relative;
    right: -10px;
    top: -17px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;

}

.titulopiedepagina {
    font-size: 1.5em;
    color: <?=$color6?>;
    font-weight: bold;
}

.ligapiedepagina {
    color: #ffffff;
    text-decoration: none;
    font-size: 1.2em;
}

#divisorBlanco {
    width: 100%; 
    background: rgb(0,0,0);
    background: linear-gradient(90deg, rgba(0,0,0,1) 50%, rgba(99,20,20,1) 100%); 
    margin:0px; 
    padding: 0px; 
}

.fondopiedepagina {
    /*background-image: url('imagenes/fondo1-piedepagina.webp');*/
    background-position: right;
    background-repeat: no-repeat;
    background-color: <?=$color5?>;
    background-size: cover;
    color: #FFFFFF;
    padding-top: 50px;
    padding-bottom: 50px;
    font-size: 12px;
}

.codigoqr {
    display: block;
    width: 150px;
    height: 150px;
    margin: 2.8rem auto 1.3rem;
    border-radius: 7px;
}

.fondogris {
    background-color: #efefef;
    color: <?=$color5 ?>;
}

.parrafo {
    text-align: justify;
    color: <?=$color5 ?>;
}

.sinespacio {
    padding: 0px !important;
}

.rojo {
    color: <?=$color3 ?>;
}


.textoempresa {
    width: 60%;
    margin: 0 auto;
}

.ventajas {
    width: 250px;
    margin: 0 auto;
}


.descarga {
    -webkit-box-shadow: 10px 10px 44px -17px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 10px 10px 44px -17px rgba(0, 0, 0, 0.75);
    box-shadow: 10px 10px 44px -17px rgba(0, 0, 0, 0.75);
    border-radius: 15px;
    width: 70%;
}

.textoblanco {
    color: #FFFFFF !important;
    line-height: 50px;
}

.iconoredes {
    cursor: pointer;
    font-size: 30px;
    padding-top: 15px;
    padding-right: 10px;
    color: #FFF !important;
}

@media (max-width: 960px) {

    .banner {
        height: 200px;
    }

    h2 {
        font-size: 20px;
        line-height: 1.5;
        margin-top: 25px;
    }

    h3 {
        font-size: 16px;
    }

    .textoempresa {
        width: 90%;
        margin: 0 auto;
        margin-bottom: 25px;
    }

    .espacioSuperior {
        height: 75px;
    }

    .descarga {
        width: 50%;
        border-radius: 5px;
    }

    .linea2 {
        height: 180px;
    }

    .columna {
        padding-left: 20px;
        padding-bottom: 20px;
    }

    .iconoredes {
        font-size: 2em;
    }

    #detallecotizacion {
        font-size: 12px;
    }

    #listacotizaciones {
        font-size: 12px;
    }

    #product {
        width: 320px !important;
    }

}

/* 

Personalización del Menú  
Generado desde: https://work.smarchal.com/twbscolor/4.0.0/css/ffffffefefef002147ed1c241

*/

.navbar {
    background-color: <?=$color1 ?>;
    padding-top: 5px;
    padding-bottom: 5px;
}

.navbar .navbar-brand {
    color: <?=$color3 ?>;
}

.navbar .navbar-brand:hover,
.navbar .navbar-brand:focus {
    color: <?=$color4 ?>;
}

.navbar .navbar-text {
    color: <?=$color3 ?>;
}

.navbar .navbar-text a {
    color: <?=$color4 ?>;
}

.navbar .navbar-text a:hover,
.navbar .navbar-text a:focus {
    color: #fff;
}

.navbar .navbar-nav .nav-link {
    color: <?=$color6 ?>;
    border-radius: .25rem;
    margin: 0 0.47em;
}

.navbar .navbar-nav .nav-link:not(.disabled):hover,
.navbar .navbar-nav .nav-link:not(.disabled):focus {
    color: <?=$color1 ?>;
    background-color: <?=$color3 ?>;
}

.navbar .navbar-nav .dropdown-menu {
    background-color: <?=$color1 ?>;
    border-color: <?=$color2 ?>;
}

.navbar .navbar-nav .dropdown-menu .dropdown-item {
    color: <?=$color6 ?>;
}

.navbar .navbar-nav .dropdown-menu .dropdown-item:hover,
.navbar .navbar-nav .dropdown-menu .dropdown-item:focus,
.navbar .navbar-nav .dropdown-menu .dropdown-item.active {
    color: #fff;
    background-color: <?=$color3 ?>;
}

.navbar .navbar-nav .dropdown-menu .dropdown-divider {
    border-top-color: <?=$color2 ?>;
}

.navbar .navbar-nav .nav-item.active .nav-link,
.navbar .navbar-nav .nav-item.active .nav-link:hover,
.navbar .navbar-nav .nav-item.active .nav-link:focus,
.navbar .navbar-nav .nav-item.show .nav-link,
.navbar .navbar-nav .nav-item.show .nav-link:hover,
.navbar .navbar-nav .nav-item.show .nav-link:focus {
    color: <?=$color6 ?>;
    background-color: <?=$color2 ?>;
}

.navbar-light .navbar-toggler {
    color: transparent;
    border: none;
}

.navbar-toggler:focus {
    box-shadow: none;
}

.navbar .navbar-toggle {
    border-color: <?=$color2 ?>;
}

.navbar .navbar-toggle:hover,
.navbar .navbar-toggle:focus {
    background-color: <?=$color2 ?>;
}

.navbar .navbar-toggle .navbar-toggler-icon {
    color: <?=$color3 ?>;
}

.navbar .navbar-collapse,
.navbar .navbar-form {
    border-color: <?=$color3 ?>;
}

.navbar .navbar-link {
    color: <?=$color3 ?>;
}

.navbar .navbar-link:hover {
    color: <?=$color4 ?>;
}

@media (max-width: 575px) {
    .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
        color: <?=$color6 ?>;
    }

    .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
    .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: <?=$color4 ?>;
    }

    .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: <?=$color4 ?>;
        background-color: <?=$color2 ?>;
    }
}

@media (max-width: 767px) {
    .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
        color: <?=$color3 ?>;
    }

    .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
    .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: <?=$color4 ?>;
    }

    .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: <?=$color4 ?>;
        background-color: <?=$color2 ?>;
    }
}

@media (max-width: 991px) {
    .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
        color: <?=$color3 ?>;
    }

    .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
    .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: <?=$color4 ?>;
    }

    .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: <?=$color4 ?>;
        background-color: <?=$color2 ?>;
    }
}

@media (max-width: 1199px) {
    .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
        color: <?=$color3 ?>;
    }

    .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
    .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: <?=$color4 ?>;
    }

    .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: <?=$color4 ?>;
        background-color: <?=$color2 ?>;
    }
}

.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
    color: <?=$color3 ?>;
}

.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: <?=$color4 ?>;
}

.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: <?=$color4 ?>;
    background-color: <?=$color2 ?>;
}

.navbar-light .navbar-toggler {
    color: <?=$color3 ?>;
    border-color: <?=$color3 ?>;
}

.navbar-light .navbar-toggler {
    color: <?=$color3 ?>;
    border-color: <?=$color3 ?>;
}

.ls-roundedflat .ls-nav-start,
.ls-roundedflat .ls-nav-stop {
    display: none !important;
}

/*
.card {
    min-height: 430px;
}
*/

/* Clases de Autocomplete Typehead de Twitter*/

.typeahead,
.tt-query,
.tt-hint {
    width: 100%;
    outline: none;
}

.typeahead {
    background-color: #fff;
}

.typeahead:focus {
    border: 2px solid #0097cf;
}

.tt-query {
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
    color: #999
}

.tt-menu {
    width: 640px;
    margin: 12px 0;
    padding: 8px 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.2);
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
}

.tt-suggestion {
    padding: 3px 20px;
    line-height: 24px;
}

.tt-suggestion:hover {
    cursor: pointer;
    color: #fff;
    background-color: #0097cf;
}

.tt-suggestion.tt-cursor {
    color: #fff;
    background-color: #0097cf;

}

.tt-suggestion p {
    margin: 0;
}

#product {
    width: 480px;
}


#return-to-top {
    position: fixed;
    bottom: 120px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}


.listadoCategorias {
    word-wrap: break-word;
}

.contenedor-select{
    overflow: hidden;
}

.categoria {
        color: <?=$color6 ?>;
        background-color: <?=$color1 ?>;
    }

.categoria:hover {
    color: <?=$color1 ?>;
    background-color: <?=$color3 ?>;             
}


.listaProyectos{
    padding-left: 1rem;
}

#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}

#return-to-top:hover i {
    color: #fff;
    top: 10px;
}


/* SLIDERS */
.carousel-inner img {
    width: 100%;
    height: 100%;
}


.slidertitulo1 {
    font-weight: 900;
    text-align: left;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    font-family: 'Poppins', sans-serif;
    font-size: 35px;
    line-height: 45px;
    color: #ffffff;
    white-space: normal;
    text-shadow: 1px 2px 5px rgba(0, 0, 0, 0.6);
}

.slidertitulo2 {
    font-weight: 700;
    text-align: center;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    font-family: 'Poppins', sans-serif;
    font-size: 40px;
    color: #ffffff;
    white-space: normal;
    margin-top: -25px;
}

.fondoslider {
    /*background-color: rgba(0, 0, 0, 0.5);
    width: 80%;
    margin: 0 auto;
    height: 100%;*/
    margin-top: 10%;
}


.carousel-caption {
    top: 15%;
    height: 35%
}

.btnmasinfo {
    margin-top: 10px;
    background: #c42626;
    color: white;
    /* border: #FFFFFF 1px solid */
}

.btnmasinfo:hover{
    background: #631414;
    color: white;
}


.carousel-control-next-icon,
.carousel-control-prev-icon {
    width: 30px;
    height: 30px;
}

#slider {
    margin-top: 60px;
}

#carousel2 .carousel-item img {
    min-height: 500px;
    /*
    object-fit: none;
    */
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: right;
}

.imagen-movil{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 300px;
    overflow: hidden; 
}

/* Parallax */
.parallax {
  /* The image used */
  background-image: url("/imagenes/banner-aviso-terminos-dacm-automatizacion.webp");

  /* Set a specific height */
  min-height: 400px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
 /*background-size: cover;*/
}

.parallax h2 {
    margin-top: 160px;
    font-size: 40px; 
    font-family: 'Poppins', sans-serif;
}

/* Logo 3d */

#logo3d {
        width: 40%;
    }

    #titulo3d {
        font-size: 50px;
        color: #555555;
        font-family: 'Poppins', sans-serif;
        margin-top: -25px;
    }

    #eslogan3d {
        font-size: 22px;
    }

    #fondo3d {
        font-size: 22px;
        background: rgb(239,239,239);
        background: linear-gradient(180deg, rgba(239,239,239,1) 0%, rgba(255,255,255,1) 100%);
    }

    @media (min-width: 960px) {
        #fondo3d {
            height: 100px; 
        }
    }




/* PARTICLES */

    canvas {
        display: block;
        vertical-align: bottom;
    }

    #particles-js {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgb(0,0,0);
    background: linear-gradient(90deg, rgba(0,0,0,1) 50%, rgba(99,20,20,1) 100%);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 50%;
    }

@media (max-width: 960px) {

   
    .slidertitulo1 {
        font-size: 1.4em;
        line-height: 1.4em;
        text-align: center;
    }


    .fondoslider {
        margin-top: 10%;
    }


    #logo {
        width: 140px;
    }

    #logopiedepagina {
        width: 220px;
    }

    #botonWhatsApp {
        bottom: 20px;
        right: 20px;
        width: 40px;
    }

    h1 {
        font-size: 1.2em;
    }

    h2 {
        font-size: 1em;
    }

    #foto-oficinas {
        width: 100%;
        height: auto;
    }


    #divisorBlanco {
        display: none;
    }

    #particles-js {
        height: 1100px;
    }

    #logo3d {
        width: 70%;
    }

    #titulo3d {
        font-size: 30px;
    }

    #eslogan3d {
        font-size: 14px;
    }

    .parallax h2 {
        font-size: 20px; 
    }


}

/* Estilo en recaptcha v3 */
.grecaptcha-badge {
    bottom: 300px !important;
}

 
</style>