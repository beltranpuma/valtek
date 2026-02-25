<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Contacto y Cotizaciones | Valtek Group SAC Perú</title>

    <meta name="description" content="Ponte en contacto con Valtek Group. Solicita cotizaciones de equipamiento industrial y soluciones tecnológicas para minería, energía y petróleo en Perú.">

    <meta name="keywords" content="contacto Valtek Group, cotizar equipos industriales, proveedores minería Perú, soluciones industriales Lima, atención al cliente Valtek">

    <meta name="author" content="Valtek Group SAC">

    <link rel="shortcut icon" type="image/x-icon" href="assets/imagenes/icono.png">

    <link rel="canonical" href="https://www.valtek.com.pe/contacto">
    <!-- Estilos Web -->
    <link rel="stylesheet" href="plugins/normalize/normalize.css">
    <link rel="stylesheet" href="assets/css/valtek.css">
    <link rel="stylesheet" href="assets/css/colores-valtek.css">
    <!-- Iconos -->
    <link rel="stylesheet" href="plugins/fontello/css/animation.css">
    <link rel="stylesheet" href="plugins/fontello/css/jmjc.css">
    <link rel="stylesheet" href="plugins/fontello/css/jmjc-codes.css">
    <link rel="stylesheet" href="plugins/fontello/css/jmjc-embedded.css">
    <!-- jQuery V.3.4.1-->
    <script src="plugins/jquery/jquery-3.6.0.min.js"></script>
    <script src="plugins/easing/jquery.easing.1.3.js"></script>
    <!-- jQuery Sticky -->
    <script src="plugins/stickyjs/jquery.sticky.js"></script>
    <!-- jQuery Carrusel Slick -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <script src="plugins/slick/slick.js"></script>
    <!-- jQuery Fancybox -->
    <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css" />
    <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
    <!-- Menu -->
    <link rel="stylesheet" href="plugins/menu/css/menujcjm.css">
    <link rel="stylesheet" href="plugins/menu/css/ionicons.css">
    <link rel="stylesheet" href="plugins/menu/css/droopmenu.css">
    <link rel="stylesheet" href="plugins/menu/css/themes/estilo-blanco.css">

    <!-- google recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Alertify -->
    <script src="plugins/alertify/alertify.js"></script>
    <link rel="stylesheet" href="plugins/alertify/alertify.core.css">
    <link rel="stylesheet" href="plugins/alertify/alertify.default.css">
        <!-- Flexslider -->
    <link rel="stylesheet" href="plugins/flexslider/flexslider.css">
        <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./assets/js/script.js"></script>

        <script>
        $(function () {
            /**********************************************************/
            /**************** VALIDACION FORMULARIO *******************/
            /**********************************************************/
            $("#benviar").click(function () {
                var nombres = $("#nombres").val();
                var telefono = $("#telefono").val();
                var email = $("#email").val();
                var empresa = $("#empresa").val();
                var cargo = $("#cargo").val();
                var comentarios = $("#comentarios").val();
                if (nombres == "") {
                    alertify.error("Debes ingresar tu nombre");
                    $("#nombres").focus();
                    return false;
                }
                if (telefono == "") {
                    alertify.error("Debes ingresar tu telefono");
                    $("#telefono").focus();
                    return false;
                }
                if (email == "") {
                    alertify.error("Debes ingresar un email valido");
                    $("#email").focus();
                    return false;
                }
                if (empresa == "") {
                    alertify.error("Debes ingresar el nombre de la empresa");
                    $("#telefono").focus();
                    return false;
                }
                if (comentarios == "") {
                    alertify.error("Debes ingresar tus comentarios");
                    $("#comentarios").focus();
                    return false;
                }
                enviarDatos();
            });
            /**********************************************************/
            /****************   ENVIAR FORMULARIO   *******************/
            /**********************************************************/
            function enviarDatos() {
                $("#proceso").val("procesarContacto");
                var datosEnviar = $("#fcontacto").serialize();
                $.ajax({
                    data: datosEnviar,
                    url: "procesos.php",
                    type: "POST",
                    dataType: "json",
                    beforeSend: function () {
                        $("#resultados").html("<i class='icon-spin5 animate-spin'></i>Procesando datos...");
                    },
                    success: function (datos) {
                        $("#resultados").html("<i class='icon-emo-happy'></i>Proceso finalizados correctamente...");
                        setTimeout(function () {
                            $("#nombres").val("");
                            $("#telefono").val("");
                            $("#email").val("");
                            $("#empresa").val("");
                            $("#cargo").val("");
                            $("#comentarios").val("");
                            $("#resultados").html("");
                        }, 3000);
                    }
                });
            }
        });
    </script>
</head>

<body>

    <!-- ******************************************************** -->
    <!-- *******************   PRECARGA   *********************** -->
    <!-- ******************************************************** -->

    <div id="precarga">
        <div id="iconoprecarga">
                <i class="icon-spin5 animate-spin"></i>
                <p>LOADING</p>
        </div>	
    </div>	

    <!-- ******************************************************** -->
    <!-- *******************   CABECERA   *********************** -->
    <!-- ******************************************************** -->
    <?php

        include_once('./shared/header.php');

    ?>

    <li class="droopmenu-parent">
    <a href="#productos" title="Productos">PRODUCTOS</a>


    <!-- ******************************************************** -->
    <!-- *******************   CUERPO WEB  ********************** -->
    <!-- ******************************************************** -->
    

        <main id="cuerpo">
        <!-- **************************************************** -->
        <!-- **********         FORMULARIO DE CONTACTOS  ********* -->
        <!-- **************************************************** -->

            <section id="banner-contactos">
                <div class="zonacentro">
                    <div class="titular">
                        <h2>Valtek Group SAC <br><span>Telecomunicaciones</span></h2>
                        <p>Innovación y conectividad de alto rendimiento para tu infraestructura tecnológica.</p>
                        <div class="linea"></div>
                        <a href="#contacto" class="btn-valtek">Contáctanos</a>
                    </div>
                </div>

                <div class="wave-container">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C0,0,10,10,141.15,29.33,212.89,39.69,263.39,67.23,321.39,56.44Z" class="shape-fill"></path>
                    </svg>
                </div>
            </section>




        <section id="contactenos">
            <div class="zonacentro">
                <div class="titulos">
                    <h2>Contacte con Nosotros</h2>
                    <div class="flecharaya">
                        <i class="icon-up-dir"></i>
                        <div></div>
                    </div>
                </div>
                <div class="columnas">
                    <div class="col7">
                        <form action="" name="fcontacto" id="fcontacto">
                            <p>No es obligatorio que detalle sus datos, es decir puede ser ANÓNIMO; pero si desea hacerlo nos permitirá informarle de las acciones tomadas por la organización.</p>
                            <p>NOMBRES Y APELLIDOS (*) :<br>
                                <input type="text" name="nombres" id="nombres" class="campos">
                            </p>
                            <p>CORREO ELECTRÓNICO (*) :<br>
                                <input type="text" name="email" id="email" class="campos">
                            </p>
                            <p>NÚMERO DE TELÉFONO (*) :<br>
                            <input type="text" name="telefono" id="telefono" class="campos">
                            </p>
                            <p>NOMBRE DE LA EMPRESA(*) :<br>
                            <input type="text" name="empresa" id="empresa" class="campos">
                            </p>
                            <p>CARGO :<br>
                            <input type="text" name="cargo" id="cargo" class="campos">
                            </p>
                            <p>MENSAJE:<br>
                                <textarea name="comentarios" id="comentarios" id="comentarios" class="txtarea"></textarea>
                            </p>
                           
                            <p><input type="button" value="ENVIAR FORMULARIO" id="benviar"></p>
                            <input type="hidden" name="proceso" id="proceso">
                            <p id="resultados"></p>
                            <p>Los campos marcados con <span>*</span> son obligatorios</p>
                        </form>
                    </div>
                    <div class="col5" style="padding: 0 20px;">
                        <img src="assets/img-apps/contactos/img-contacto-artguru.png" alt="" style="border-radius: 10px; width: 100%;">
                        <p style="font-weight: 800; margin-top: 20px;">Ubicanos :</p>
                        <p>
                            <i class="icon-localizar"></i> Av. Republica de Panamá 6598, Barranco - Lima<br>
                            <i class="icon-telefono"></i> 923 501 000<br>
                            <i class="icon-email"></i> valtek@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </section>





    </main>
    
    <!-- ******************************************************** -->
    <!-- *******************   PIE PAGINA WEB  ****************** -->
    <!-- ******************************************************** -->
    
    <?php

        include_once('./shared/footer.php');

    ?>

    <!-- ******************************************************** -->
    <!-- *******************      WHATSAPP       **************** -->
    <!-- ******************************************************** -->
    <div id="contwhats">
        <div id="cajawhatsapp">
            <a href="https://api.whatsapp.com/send?phone=51923501304&text=Deseo contactarme con uds." 
            target="_blank" 
            class="whatsapp-link"
            title="Comunícate con Nosotros">
                <i class="fa-brands fa-whatsapp"></i>
                <span class="notification-dot"></span>
            </a>
            
            <div class="whatsapp-label">
                <span class="online-text">¿Necesitas ayuda?</span>
                <span class="number-text">+51 923 501 304</span>
            </div>
        </div>
    </div>

    

    <!-- ******************************************************** -->
    <!-- ****************      PANTALLA REDES       ************* -->
    <!-- ******************************************************** -->
    <div id="cajasociales">
        <div id="cajablanca">
            <ul>
                <li><a href="#"><span>Síguenos en:</span></a></li>
                <li><a href="#"
                        target="_blank"><span>Facebook</span></a></li>
                <li><a href="#" target="_blank"><span>Whatsapp</span></a></li>
                <li><a href="#"
                        target="_blank"><span>Instagram</span></a></li>
                <li><a href="#" target="_blank"><span>Linkedin</span></a></li>
            </ul>
        </div>
    </div>
    <!-- ******************************************************** -->
    <!-- ******************************************************** -->
    <script type="text/javascript" src="plugins/menu/js/droopmenu.js"></script>
        <script type="text/javascript" src="plugins/gmaps/gmaps.js"></script>
    <!-- Flexslider -->
    <script type="text/javascript" src="plugins/flexslider/jquery.flexslider.js"></script>
    <script>
        $(function () {
            /*******************************************/
            /*******************************************/
            if (jQuery(this).scrollTop() > 100) {
                jQuery(".droopmenu-navbar").css({
                    'background': "rgba(255, 255, 255, 1)"
                });
            } else {
                jQuery(".droopmenu-navbar").css({
                    'background': "rgba(255, 255, 255, 1)"
                });
            }
            jQuery(document).scroll(function () {
                if (jQuery(this).scrollTop() > 100) {
                    jQuery(".droopmenu-navbar").css({
                        'background': "rgba(255, 255, 255, 1)"
                    });
                } else {
                    jQuery(".droopmenu-navbar").css({
                        'background': "rgba(255, 255, 255, 1)"
                    });
                }
            })

            /*******************************************/
            /*******************************************/
            $(document).on("click", ".droopmenu li a", function (e) {
                var $ancla = $(this);
                $("html, body").stop().animate({
                    scrollTop: ($($ancla.attr("href")).offset().top - 60)
                }, 2000, "easeInOutExpo");
            })
            /*******************************************/
            /*******************************************/
            $("#biconos").click(function () {
                $("#cajasociales").css({
                    "right": "0"
                });
            })
            $("#cajasociales").click(function () {
                $("#cajasociales").css({
                    "right": "-100%"
                });
            })
                
            /**************************************************/
            /********    INICIALIZAR FLEXSLIDER       *********/
            /**************************************************/
            $('.flexslider').flexslider({
                animation: "slide"
            });

      
        })
        /*******************************************************/
        /*******************************************************/
        jQuery(function ($) {
            $('.droopmenu-navbar').droopmenu({
                dmOffCanvas: true
            });
        });
    </script>
    
</body>

</html>