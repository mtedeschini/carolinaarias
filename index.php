<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Caro</title>
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Scroll Reveal-->

   
    <script>
        ScrollReveal({ duration: 1000 })
    </script>
    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
</head>

<body id="inicio">

    <!--Header Barra Navegacion-->
    <header class="d-flex flex-wrap justify-content-center px-5 py-4 pt-md-5 mb-3 fixed-top">
        <a href="#inicio" class="d-flex mb-2 mb-md-0 me-md-auto ps-md-5 ">
            <img src="images/logo.png" class="logo">
        </a>
        <ul class="nav justify-content-center">
            <li class="nav-item"><a href="#main" class="nav-link active" aria-current="page">INICIO</a></li>
            <li class="nav-item"><a href="#perfil" class="nav-link">PERFIL</a></li>
            <li class="nav-item"><a href="#servicios" class="nav-link">SERVICIOS</a></li>
            <li class="nav-item"><a href="#contacto" class="nav-link">CONTACTO</a></li>
        </ul>
    </header>

    <main id="main" class="main">

        <!--Main-->

        <div class=" imgInicio container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 ">
                    <h1 class="titulo" style="margin-top: 210px; text-align: right;">Atención <br> oftalmológica <br>
                        personalizada </h1>
                    <div style=" margin-top: 20px;" class="contBtn col-12 text-center">
                        <!--Boton-->
                        <br><a href="#servicios" class=" btnServ py-4 px-5 text-center"> VER SERVICIOS </a>
                    </div>

                </div>
                <div class="col-lg-6 col-12 ojo" style="margin-top: 150px; text-align: left; padding-left: 2%;">
                    <img src="images/fondo.png" class="" style="max-width: 80%" alt="">
                </div>
            </div>

            <!--Caja Datos-->

            <section id="datos" class=" container boxDatos shadow-lg p-3 mt-sm-5 pt-4 bg-white text-center">
                <div class="row ">

                    <div class="col-12 col-sm-3  tarjDatos" style="text-align: center; display: inline-block;">
                        <div>
                            <img src="images/place.png" style="max-width: 40px; margin-top: 15px" alt="">
                            <p style="font-weight: 600; margin-top: 15px;">French 218 - 1° Piso <br> <span
                                    style="font-weight: 300;">Banfield - Buenos Aires</span></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3  tarjDatos" style="text-align: center; display: inline-block;">
                        <div>
                            <img src="images/turno.png" style="width: 70px; margin-top: 15px" alt="">
                            <p style="font-weight: 600; margin-top: 15px;">Lunes a viernes<span
                                    style="font-weight: 300;"> de 9 a 19hs </span> <br> Sábados <span
                                    style="font-weight: 300;"> de 10 a 14hs</span> </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 tarjDatos" style=" text-align: center; display: inline-block;">
                        <a href="tel:+1137916567">
                            <div>
                                <img src="images/telefono.png" style="width: 60px;margin-top: 15px" alt="">
                                <p style="font-weight: 600; margin-top: 15px;">Teléfono <br> <span
                                        style="font-weight: 300;">11 3791 OJOS (6567)</span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <!--Perfil-->

        <section id="perfil" style="margin-top: 150px;" class="perfil">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-12" style="text-align: center;">
                        <img style="width: 80%; height: auto; " src="images/perfil.jpg"
                            class="rounded-circle img-fluid shadow" alt="">
                    </div>
                    <div class="col-sm-6 col-12 mt-5">
                        <h2>Dra. Carolina Arias</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eveniet recusandae atque
                            aliquid corporis optio maxime quos quod facere odio ad, blanditiis earum laudantium
                            laboriosam rerum qui harum officia nobis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eveniet recusandae atque
                            aliquid corporis optio maxime quos quod facere odio ad, blanditiis earum laudantium
                            laboriosam rerum qui harum officia nobis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eveniet recusandae atque
                            aliquid corporis optio maxime quos quod facere odio ad, blanditiis earum laudantium
                            laboriosam rerum qui harum officia nobis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eveniet recusandae atque
                            aliquid corporis optio maxime quos quod facere odio ad, blanditiis earum laudantium
                            laboriosam rerum qui harum officia nobis?</p>
                    </div>
                </div>

                <!--Datos Médica-->

                <div class="container">
                    <div class="row mt-5 justify-content-center datosmedica">
                        <div class="col-sm-3 col-12 mt-5 medica mx-auto">
                            <p> <span style="font-family: Gotham Bold"> Médica </span> <br> Universidad de Buenos Aires
                                <br>Diploma de Honor
                            </p>
                        </div>
                        <div class="col-sm-3 col-12 mt-5 medica1 mx-auto">
                            <p> <span style="font-family: Gotham Bold"> Especialista Certificado en Oftalmología </span>
                                <br> Universidad de Buenos Aires <br>Sociedad Argentina de Oftalmología
                            </p>
                        </div>
                        <div class="col-sm-3 col-12 mt-5 medica2 mx-auto">
                            <p> <span style="font-family: Gotham Bold"> Concurrente del Servicio de Oftalmología del
                                    Htal.
                                    Juan A. Fernández </span> <br> Universidad de Buenos Aires <br>Diploma de Honor</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <!--Servicios-->
        <section class="container-fluid " style="margin-top: 50px;" id="servicios">
            <div style="margin-top: 25px; text-align: center; padding-top: 50px;" class="servicios pb-5">
                <a style="margin-bottom: 0px; font-family: Gotham Bold;" href=""> CONOCÉ MÁS</a>
                <h3 style="text-align: center"> Servicios </h3>
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 my-sm-4 tarjServ"
                        style="text-align: center; display: inline-block; min-height: 200px;">
                        <div style="min-height: 80px;">
                            <img src="images/icon1.png" style="width: 60px; margin-top: 15px" alt="">
                        </div>
                        <p style="margin-top: 20px;"> Consulta oftalmológica </br><b>completa</b> </p>
                    </div>
                    <div class="col-6 col-sm-4 my-sm-4 tarjServ"
                        style="text-align: center; display: inline-block; min-height: 200px;">
                        <div style="min-height: 80px;">
                            <img src="images/icon2.png" style="width: 60px; margin-top: 15px" alt="">
                        </div>
                        <p style="margin-top: 20px;"> Manejo de <b>patologías <br>crónicas (Glaucoma,
                                <br>Maculopatías)</b> </p>
                    </div>
                    <div class="col-6 col-sm-4 my-sm-4 tarjServ"
                        style="text-align: center; display: inline-block; min-height: 200px;">
                        <div style="min-height: 80px;">
                            <img src="images/icon3.png" style="width: 90px; margin-top: 25px" alt="">
                        </div>
                        <p style="margin-top: 20px;"> <b> Cirugía de cataratas </b> </p>
                    </div>
                    <div class="col-6 col-sm-4 my-sm-4 tarjServ" style="text-align: center; display: inline-block; min-height: 200px;">
                        <div style="min-height: 80px;">
                            <img src="images/icon4.png" style="width: 60px; margin-top: 15px" alt="">
                        </div>
                        <p style="margin-top: 20px;"> <b> Práctica láser </b> </p>
                    </div>
                    <div class="col-6 col-sm-4 my-sm-4 tarjServ"
                        style="text-align: center; display: inline-block; min-height: 200px;">
                        <div style="min-height: 80px;">
                            <img src="images/icon5.png" style="width: 50px; margin-top: 15px" alt="">
                        </div>
                        <p style="margin-top: 20px;"> <b>Atención de </br> adultos y niños</b> </p>
                    </div>
                    <div class="col-6 col-sm-4 my-sm-4 tarjServ"
                        style="text-align: center; display: inline-block; min-height: 200px;">
                        <div style="min-height: 80px;">
                            <img src="images/icon6.png" style="width: 60px; margin-top: 15px" alt="">
                        </div>
                        <p style="margin-top: 20px;"> <b>Equipamiento <br> de última generación </b> </p>
                    </div>

                </div>
            </div>


        </section>

        <!--Contacto-->

        <section class="row contacto">

            <!--Datos Contacto-->


            <div class="col-lg-3 col-12 col-sm-6 datosContacto order-2 order-sm-1">
                <div class="container-fluid itemsContacto">
                    <div class="row justify-content-center pt-sm-5">
                        <div class="col-2" style="text-align: right;">
                            <img src="images/icon_blanco_place.png" alt="">
                        </div>
                        <div class="col-7">
                            <p> <b>French 218 - 1° piso </b> <br> Banfield, Buenos Aires </p>
                        </div>
                    </div>
                    <div class="row justify-content-center  pt-sm-5">
                        <div class="col-2" style="text-align: right;">
                            <img src="images/icon_blanco_turno.png" alt="">
                        </div>
                        <div class="col-7">
                            <p> <b>Lunes a Viernes </b> de 9 a 19hs <br> <b>Sábados </b> de 10 a 14hs </p>
                        </div>
                    </div>

                    <a href="tel:+1137916567">
                        <div class="row justify-content-center  pt-sm-5">
                            <div class="col-2" style="text-align: right;">
                                <img src="images/icon_blanco_tel.png" alt="">
                            </div>
                            <div class="col-7">
                                <p> <b>Teléfono </b> <br> 11 3791 OJOS (6567) </p>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/draariascarolina/" target="_blank">
                        <div class="row justify-content-center  pt-sm-5">
                            <div class="col-2" style="text-align: right;">
                                <img src="images/icon_blanco_ig.png" alt="">
                            </div>
                            <div class="col-7 pt-2">
                                <p> <b> @DraAriasCarolina </b> </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="row justify-content-center logoBlanco" style="margin-top: 150px;">
                    <img src="images/logo_blanco.png" style="max-width: 300px;" alt="">
                </div>
            </div>


            <!--Formulario Contacto-->
            <div class="container contacto col-lg-7 col-12 col-sm-6 pt-5 order-1 order-sm-2  " id="contacto">
                <h3 class="text-center text-sm-start"> Contacto </h3>
                <form action="" class="row">
                    <div class="mb-lg-5 formulario col-lg-6 col-12 text-lg-start text-center">
                        <label for="nombre" style="font-weight: bold; text-align: left;"> NOMBRE
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresá tu nombre">
                        </label>
                    </div>
                    <div class="mb-lg-5 formulario col-lg-6 col-12 text-lg-start text-center">
                        <label for="nombre" style="font-weight: bold; text-align: left;"> APELLIDO
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresá tu apellido">
                        </label>
                    </div>
                    <div class="mb-lg-5 formulario col-lg-6 col-12 text-lg-start text-center">
                        <label for="nombre" style="font-weight: bold; text-align: left;"> EMAIL
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresá tu email">
                        </label>
                    </div>
                    <div class="mb-lg-5 formulario col-lg-6 col-12 text-lg-start text-center">
                        <label for="nombre" style="font-weight: bold; text-align: left;"> TELÉFONO
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresá tu teléfono">
                        </label>
                    </div>
                    <div class="mb-lg-5 formulario col-12 text-lg-start text-center">
                        <label for="nombre" style="font-weight: bold; text-align: left;"> MENSAJE
                            <textarea type="textarea" rows="3" class="form-control" id="nombre"
                                placeholder="Ingresá tu mensaje"></textarea>
                        </label>
                    </div>

                    <div style=" margin-top: 15px;" class="contBtn col-12 text-end pe-2 pb-3 mb-3">
                        <!--Boton-->
                        <br><a href="" class=" btnServ py-4 px-5 text-center"> ENVIAR </a>
                    </div>


                </form>

            </div>

        </section>

    </main>
    <section id="footer" class="footer">
        <div class="container">
            <a href="https://wa.me/+5491130545464?" class="whatsapp" target="_blank"> <i
                    class="fa fa-whatsapp whatsapp-icon"></i></a>
        </div>

    </section>

</body>
<script>
    ScrollReveal().reveal('.imgInicio > div', { delay: 100 })
    ScrollReveal().reveal('.servicios', { delay: 200 })
    ScrollReveal().reveal('.medica', { delay: 200 })
    ScrollReveal().reveal('.medica1', { delay: 600 })
    ScrollReveal().reveal('.medica2', { delay: 1200 })
</script>
</html>