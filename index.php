<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,700;1,700&family=Dosis:wght@500;600&family=Heebo:wght@100;200;300&family=Lilita+One&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/2356e8f8d0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/modal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>
    <?php include("modal.php"); ?>
    <div class="container">
        <div class="div-header">
            <nav>
                <a href="#">Inicio</a>
                <a href="#">Sobre nosotros</a>
                <a href="#">Tecnologías</a>
                <a href="#">Servicios</a>
                <a href="#">Contactos</a>
            </nav>
            <section class="titulos-section">
                <h1>Desarrollo de software para cualquier rubro empresarial</h1>
                <h2>Desarrollo de software 100% de calidad</h2>
                <div class="btn-header">
                    <button class="boton"><span style="font-size: 30px; margin: auto;"
                            class="material-symbols-outlined">keyboard_double_arrow_down</span>
                        <p style="margin:auto;">Obtener información</p>
                    </button>
                </div>
            </section>
            <div class="efecto-cabecera" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150"
                    preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                        style="stroke: none; fill: #f9f9f9;"></path>
                </svg></div>
        </div>
        <!-- TERCER BLOQUE -->
        <div class="div-tercer">
            <div class="img-tercer">
                <div style="width: 70%; margin: auto;">
                    <img src="img/computadora.png" alt="">
                </div>
            </div>
            <div class="parrafo-tercer">
                <h1>¿En qué creemos?</h1>
                <p>Lo que funciona hoy lo hara a futuro, los buenos resultados es el producto de la perseverancia y
                    trabajo en equipo, la mejora continua es el aprendizaje constante.</p>
                <button id="abrir">Conócenos</button>
            </div>
        </div>
        <!-- CUARTO BLOQUE -->
        <div class="div-desarrollo" style="background: #EFEFEF; width: 100%;">
            <div>
                <img src="img/imagen2.png" alt="" class="img-sistemas1">
                <h2 class="titulo-desarrollo">Diseño de págima web</h2>
                <p class="parrafo-desarrollo">Nuestro servicio de diseño de páginas web, es desarrollado con diferentes
                    tecnologías dependiendo del tipo de sitio de su elección. Nuestra empresa no se preocupa tan solo
                    del diseño del sitio, sino también que el sitio web contenga los canales de comunicación con su
                    potencial cliente, como por ejemplo: Formularios de contacto, teléfonos visibles, WhatsApp web,
                    botones para cotizar, botones de llamada y estadísticas.</p>
            </div>
            <div>
                <img src="img/telefono.png" alt="" class="img-sistemas2">
                <h2 class="titulo-desarrollo">Aplicaciónes moviles</h2>
                <p class="parrafo-desarrollo">Tenemos un staff de profesionales competentes en el mundo del desarrollo
                    de aplicaciones móviles, manejando distintas herramientas para el desarrollo de estos tipos de
                    sistemas, se toma encuenta los requerimientos establecidos por los usuarios proponiendo un analisis
                    exahustivo en el que nuestros clientes desean implementar para ello contamos con profesionales
                    capacitados para tales proyectos de aplicaciones.</p>
            </div>
            <div>
                <img src="img/escritorio.png" alt="" class="img-sistemas3">
                <h2 class="titulo-desarrollo">Programas de escritorio</h2>
                <p class="parrafo-desarrollo">Gran parte del sector empresarial utilizan estos tipos de sistemas, la
                    ventaja de estos sistemas de información es que pueden funcionar sin la necesidad de conectarse a
                    internet caso contrario con los sistemas web u otras tecnologías que funcionan con acceso a
                    internet. Un gran porcentaje de empresas que inician seleccionan estos tipos de sistemas permitiendo
                    ya que es mas facil su desarrollo e implmentación.
                </p>
            </div>
        </div>
        <!-- SEXTO BLOQUE -->
        <div class="position">
            <img src="img/linea.png" alt="">
        </div>
        <div class="bloque-quinto">
            <div class="titulos-parrafos">
                <div class="parrafo-h1">
                    <p>EN JB DEVELOPMENT DESARROLLAMOS SOFTWARE Y ESTO NOS APASIONA. CONVERTIMOS TU IDEA EN UNA APP MÓVIL,
                        UN WEBSITE, UN SOFTWARE DE COMPUTADOR, ETC.</p>
                    <h1>METODOLOGÍA DE <span>TRABAJO</span></h1>
                    <div style="width:30%; margin:auto;">
                        <marquee behavior="" direction=""><div style="border-bottom:3px solid #FA6742;"></div></marquee>
                    </div>
                </div>
                <div class="div-circulos">
                    <div class="flex-items1">
                        <div class="circulo1-img">
                            <div class="circulo1">
                                <img src="img/process1.png" alt="">
                            </div>
                            <p>01. Planeación y captación de los requerimientos técnicos para empezar el desarrollo del producto.</p>
                        </div>
                    </div>
                    <div class="flex-items2">
                        <div class="circulo2-img">
                            <div class="circulo2">
                                <img src="img/process2.png" alt="">
                            </div>
                            <p>02. Desarrollo de las ideas requeridas con todos los procesos de programación y estandarización.</p>
                        </div>
                    </div>
                    <div class="flex-items3">
                        <div class="circulo3-img">
                            <div class="circulo3">
                                <img src="img/process3.png" alt="">
                            </div>
                            <p>03. Implementación a modo de pruebas para validar posibles errores y cambio de requisitos.</p>
                        </div>
                    </div>
                    <div class="flex-items4">
                        <div class="circulo4-img">
                            <div class="circulo4">
                                <img src="img/process4.png" alt="">
                            </div>
                            <p>04. Implementación total y soporte en el tiempo acordado entre las partes por el producto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position">
            <img src="img/linea.png" alt="">
        </div>
        <!-- QUINTO BLOQUE -->
        <div class="top-triangulo">
        </div>
        <div class="cuarta-bloque">
            <h1 class="titulo">Todos nuestros planes cuentan con</h1>
            <div class="nuestros-planes">
                <!-- plan1 -->
                <div class="plan1">
                    <div class="plan1-1">
                        <div class="plan1-icono">
                            <i class="fa-solid fa-computer" style="font-size: 70px;"></i>
                        </div>
                        <div class="plan1-texto">
                            <h3>RESPONSIVO</h3>
                            <p>Como cada vez más las personas acceden a internet solo por teléfono celular, es muy
                                importante
                                que tu sitio sea adecuado para dispositivos móviles, es decir, que sea responsivo.</p>
                        </div>
                    </div>
                    <div>
                        <div class="plan1-icono">
                            <i class="fa-sharp fa-solid fa-book-atlas" style="font-size: 70px;"></i>
                        </div>
                        <div class="plan1-texto">
                            <h3>ESCALABLES</h3>
                            <p>Si los textos de un sitio parecen complicados, el usuario de Internet no va a pensar dos
                                veces antes de cerrarlo. Por eso, el buen redactor busca crear textos que tengan
                                “escaneabilidad” o, en otras palabras, la adecuación del contenido para que sea lo
                                suficientemente simple para ser entendido con un rápido “vistazo”.</p>
                        </div>
                    </div>
                    <div>
                        <div class="plan1-icono">
                            <i class="fa-solid fa-text-slash" style="font-size: 70px;"></i>
                        </div>
                        <div class="plan1-texto">
                            <h3>TIPOGRAFIAS</h3>
                            <p>Si desde este punto comenzamos a escribir esta publicación con un tipo de letra
                                completamente diferente, tu experiencia de lectura no sería muy agradable, ¿verdad?
                                Después de todo, es una tipografía que no encajaría con el resto del contenido. Lo mismo
                                debería aplicarse a tu sitio.</p>
                        </div>
                    </div>
                    <div>
                        <div class="plan1-icono">
                            <i class="fa-solid fa-arrow-rotate-right" style="font-size: 70px;"></i>
                        </div>
                        <div class="plan1-texto">
                            <h3>VELOCIDAD DE CARGA</h3>
                            <p>En un mundo donde todos parecen estar siempre apurados, tener un sitio web de carga
                                rápida es esencial. Según Google, los sitios que tardan más de 2 segundos en cargarse
                                dañan tanto la experiencia del usuario como la indexación del sitio.</p>
                        </div>
                    </div>
                </div>
                <!-- plan2 -->
                <div class="plan2">
                    <div style="display: flex; flex-direction:column;">
                        <div style="display:flex;">
                            <div class="plan1-icono">
                                <i class="fa-sharp fa-solid fa-ethernet" style="font-size: 70px;"></i>                     
                            </div>
                            <div class="plan2-texto">
                                <h3>SEO ESENCIAL (Tecnicas que permiten que su web sea facilmente rastreado por Google)
                                </h3>
                                <div>
                                    <ul class="plan2-ul2">
                                        <li>Uso de <b>keywords</b> o palabras clave</li>
                                        <li><b>Sitemap:</b> archivo para los robots de Google</li>
                                        <li><b>Google Analytics:</b> podrá ver estadísticas de su sitio web</li>
                                        <li><b>Search Console:</b> indexado en Google</li>
                                        <li><b>Metaetiquetado:</b> permite que su web sea rastreada por diferentes
                                            palabras o frases.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="display:flex;">
                            <div class="plan1-icono">
                                <i class="fa-solid fa-arrow-down-up-lock" style="font-size: 70px;"></i>
                            </div>
                            <div class="plan2-texto">
                                <h3>SEGURIDAD WEB</h3>
                                <div>
                                    <ul class="plan2-ul1">
                                        <li>Instalación de Recaptcha en formularios</li>
                                        <li>Instalación de SSL o Certificado de Seguridad (HTTPS), para eliminar “sitio
                                            no seguro”</li>
                                        <li>Se otorgará un copia de seguridad de todos los archivos y bases de datos de
                                            su web como respaldo</li>
                                        <li>Además instalamos plugins de seguridad y creamos claves de seguridad muy
                                            fuertes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding: 70px;">
                <h3 style="text-align: center; color: rgb(54, 170, 206); font-size: 24px;">
                    y contarás con nuestro Soporte Técnico 24/365
                </h3>
            </div>
        </div>
        <div class="botom-triangulo">
        </div>
    
    </div>
    <script src="js/main.js"></script>
</body>

</html>