<?php 
    include("conexion/conexion.php");
    $cn = Conectarse();
?>
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <?php include("modal.php"); ?>
    <div class="progre-principal">
        <div id="progreBarra" class="progreBarra"></div>
    </div>
    <div class="container">
        <div class="div-header">
            <nav class="nav-uls">
                <div class="nav-1" style="padding:5px; background:#DE8A00;" >
                    <div class="primerNav1" id="primerNav1">
                        <div class="nav">
                            <div class="cerrarMenu" id="cerrarMenu">
                                <button id="btnCerrar"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="primerNav">
                                <p>CONSIGUE AHORA UNA AUDITORÍA DIGITAL GRATUITA DE TU
                                    NEGOCIO</p>

                                <input type="text" placeholder="Introduce la web de tu negocio" id="sitio" name="sitio">
                                <button class="btn-auditoria" onclick="mandarLink('listado')">
                                    <h3>¡Comienza Auditoria!</h3>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="div-menu1">
                        <button class="btnAbrir" id="btnAbrir"><i class="fa-solid fa-bars"></i></button>
                    </div>
                </div>
                <div class="nav-ul">
                    <div class="titulo-ul">
                        <h1>Máster web</h1>
                        <i class="fa-solid fa-computer" style="font-size: 35px;"></i>
                    </div>
                    <button class="btn-Abrir2" id="btn-Abrir2"><i class="fa-solid fa-bars"></i></button>

                    <nav class="ul" id="ul">
                        <div class="btn-cerrar2" id="btn-cerrar2">
                            <button id="btnCerrar"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="titulo-ul2">
                            <h1>Máster web</h1>
                            <i class="fa-solid fa-computer" style="font-size: 35px;"></i>
                        </div>
                        <ul>
                            <li><a href="#" class="amenu">Inicio</a></li>
                            <li><a href="#" class="amenu">Sobre nosotros</a></li>
                            <li><a href="#" class="amenu">Tecnologías</a></li>
                            <li><a href="#" class="amenu">Servicios</a></li>
                            <li><a href="#" class="amenu">Contactos</a></li>
                        </ul>
                    </nav>
                </div>
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
                </svg>
            </div>
        </div>
        <!-- TERCER BLOQUE -->
        <div class="div-tercer" data-aos="zoom-in-down">
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
                <img src="img/imagen2.png" alt="" class="img-sistemas1" data-aos="zoom-in">
                <h2 class="titulo-desarrollo">Diseño de págima web</h2>
                <p class="parrafo-desarrollo">Nuestro servicio de diseño de páginas web, es desarrollado con diferentes
                    tecnologías dependiendo del tipo de sitio de su elección. Nuestra empresa no se preocupa tan solo
                    del diseño del sitio, sino también que el sitio web contenga los canales de comunicación con su
                    potencial cliente, como por ejemplo: Formularios de contacto, teléfonos visibles, WhatsApp web,
                    botones para cotizar, botones de llamada y estadísticas.</p>
            </div>
            <div>
                <img src="img/telefono.png" alt="" class="img-sistemas2" data-aos="zoom-in">
                <h2 class="titulo-desarrollo">Aplicaciónes moviles</h2>
                <p class="parrafo-desarrollo">Tenemos un staff de profesionales competentes en el mundo del desarrollo
                    de aplicaciones móviles, manejando distintas herramientas para el desarrollo de estos tipos de
                    sistemas, se toma encuenta los requerimientos establecidos por los usuarios proponiendo un analisis
                    exahustivo en el que nuestros clientes desean implementar para ello contamos con profesionales
                    capacitados para tales proyectos de aplicaciones.</p>
            </div>
            <div>
                <img src="img/escritorio.png" alt="" class="img-sistemas3" data-aos="zoom-in">
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
                    <p>EN JB DEVELOPMENT DESARROLLAMOS SOFTWARE Y ESTO NOS APASIONA. CONVERTIMOS TU IDEA EN UNA APP
                        MÓVIL,
                        UN WEBSITE, UN SOFTWARE DE COMPUTADOR, ETC.</p>
                    <h1>METODOLOGÍA DE <span>TRABAJO</span></h1>
                    <div style="width:30%; margin:auto;">
                        <marquee behavior="" direction="">
                            <div style="border-bottom:3px solid rgb(51, 72, 167);"></div>
                        </marquee>
                    </div>
                </div>
                <div class="div-circulos">
                    <div class="flex-items1">
                        <div class="circulo1-img">
                            <div class="circulo1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <img src="img/process1.png" alt="">
                            </div>
                            <p>01. Planeación y captación de los requerimientos técnicos para empezar el desarrollo del
                                producto.</p>
                        </div>
                    </div>
                    <div class="flex-items2">
                        <div class="circulo2-img">
                            <div class="circulo2"  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <img src="img/process2.png" alt="">
                            </div>
                            <p>02. Desarrollo de las ideas requeridas con todos los procesos de programación y
                                estandarización.</p>
                        </div>
                    </div>
                    <div class="flex-items3">
                        <div class="circulo3-img">
                            <div class="circulo3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <img src="img/process3.png" alt="">
                            </div>
                            <p>03. Implementación a modo de pruebas para validar posibles errores y cambio de
                                requisitos.</p>
                        </div>
                    </div>
                    <div class="flex-items4">
                        <div class="circulo4-img">
                            <div class="circulo4"  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <img src="img/process4.png" alt="" >
                            </div>
                            <p>04. Implementación total y soporte en el tiempo acordado entre las partes por el
                                producto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position">
            <img src="img/linea.png" alt="">
        </div>

        <!-- precios para paginas web -->
        <div>
            <h1 style="text-align: center; margin-bottom:10px; font-size: 40px;"> NUESTROS PLANES
                <span>ORGANIZACIONES</span>
            </h1>
            <div style="width:30%; margin:auto; padding-bottom:70px;">
                <marquee behavior="" direction="">
                    <div style="border-bottom:3px solid rgb(51, 72, 167);"></div>
                </marquee>
            </div>
            <div class="precios">
                <div class="titulos-primer" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="precios-titulos">
                        <p class="p-precios">Precios</p>
                        <h1>Planes de diseño de páginas web en Perú</h1>
                        <p class="parrafo">¡Empieza hoy! Todos tus planes son escalables y crecer contigo</p>
                    </div>
                </div>
                <div class="cartel-precios">
                    <h2>Profesional</h2>
                    <div class="titulos-precios">
                        <h3>S/ 1250</h3>
                        <p style="text-decoration: line-through;">Normal: S/ 1500</p>
                    </div>
                    <h4 class="emprendedores">Emprendedores y PYMES</h4>
                    <ul class="ul-primero">
                        <li>1 Página Interna</li>
                        <li>10 Bloques o Secciones</li>
                    </ul>
                    <ul class="ul-precios">
                        <li>100% Administrable</li>
                        <li>Whatsapp</li>
                        <li>Google SEO</li>
                        <li>WordPress Theme</li>
                        <li>5 Correo profesionales*</li>
                        <li>Hosting + .COM + SSL*</li>
                        <li>Soporte, capacitación</li>
                        <li>y mucho más .</li>
                    </ul>
                    <div class="foter-precios">
                        <p class="p-footer1">¡Lanza tu web en 5 días</p>
                        <div class="btn-detalles">
                            <button>Solicitar + detalle</button>
                        </div>
                        <p class="p-renovacion">* Renovación Anual: S/ 450</p>
                    </div>
                </div>

                <div class="cartel-precios">
                    <h2>Empresarial</h2>
                    <div class="titulos-precios">
                        <h3>S/ 1750</h3>
                        <p style="text-decoration: line-through;">Normal: S/ 2000</p>
                    </div>
                    <h4 class="emprendedores">Negocios en crecimiento</h4>
                    <ul class="ul-primero">
                        <li>5 Páginas Internas</li>
                        <li>25 Bloques o Secciones</li>
                    </ul>
                    <ul class="ul-precios">
                        <li>100% Administrable</li>
                        <li>Whatsapp</li>
                        <li> Google SEO</li>
                        <li>WordPress Theme</li>
                        <li>5 Correo profesionales*</li>
                        <li>Hosting + .COM + SSL*</li>
                        <li>Soporte, capacitación</li>
                        <li>y mucho más .</li>
                    </ul>
                    <div class="foter-precios">
                        <p class="p-footer1">¡Lanza tu web en 10 días</p>
                        <div class="btn-detalles">
                            <button>Solicitar + detalle</button>
                        </div>
                        <p class="p-renovacion">* Renovación Anual: S/ 450</p>
                    </div>
                </div>

                <div class="cartel-precios">
                    <h2>Corporativa</h2>
                    <div class="titulos-precios">
                        <h3>S/ 2250</h3>
                        <p style="text-decoration: line-through;">Normal: S/ 2500</p>
                    </div>
                    <h4 class="emprendedores">Empresas consolidadas</h4>
                    <ul class="ul-primero">
                        <li>1 Página Interna</li>
                        <li>10 Bloques o Secciones</li>
                    </ul>
                    <ul class="ul-precios">
                        <li>100% Administrable</li>
                        <li>Whatsapp</li>
                        <li> Google SEO</li>
                        <li>WordPress Theme</li>
                        <li>5 Correo profesionales*</li>
                        <li>Hosting + .COM + SSL*</li>
                        <li>Soporte, capacitación</li>
                        <li>y mucho más .</li>
                    </ul>
                    <div class="foter-precios">
                        <p class="p-footer1">¡Lanza tu web en 5 días</p>
                        <div class="btn-detalles">
                            <button>Solicitar + detalle</button>
                        </div>
                        <p class="p-renovacion">* Renovación Anual: S/ 450</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- QUINTO BLOQUE -->
        <div style="display:flex; justify-content:flex-end;">
            <div style="width: 40%; margin:20px; line-height:1.5; text-align:right; color:#014572;">
                <p>* Te brindamos el primer año GRATIS de Hosting, Dominio .COM, 5 Correos y SSL.</p>
                <p>* Los precios no incluyen I.G.V. Válidos para compras desde Perú.</p>
                <p>* Por favor, lee aquí los términos y condiciones.</p>
            </div>
        </div>
        <!-- <div class="top-triangulo">
        </div> -->
        <div class="cuarta-bloque">
            <h1 class="titulo">Todos nuestros planes cuentan con</h1>
            <div class="nuestros-planes">
                <!-- plan1 -->
                <div class="plan1">
                    <div class="plan1-1">
                        <div class="plan1-icono">
                            <i class="fa-solid fa-computer"></i>
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
                            <i class="fa-sharp fa-solid fa-book-atlas"></i>
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
                            <i class="fa-solid fa-text-slash"></i>
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
                            <i class="fa-solid fa-arrow-rotate-right"></i>
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
                    <div class="plan2-1">
                        <div class="plan2-1-1">
                            <div class="plan2-icono2">
                                <i class="fa-sharp fa-solid fa-ethernet"></i>
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
                        <div class="segundo-plan">
                            <div class="plan2-icono2">
                                <i class="fa-solid fa-arrow-down-up-lock"></i>
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
        <!-- SECCION SIETE -->
        <div>
            <div>
                <h1 style="text-align: center; margin-bottom:10px; font-size: 40px;"> PREGUNTAS FRECUENTES
                    <span>REALIZADAS</span>
                </h1>
                <div style="width:30%; margin:auto; padding-bottom:70px;">
                    <marquee behavior="" direction="">
                        <div style="border-bottom:3px solid rgb(51, 72, 167);"></div>
                    </marquee>
                </div>
            </div>
            <div class="cont-preguntas">
                <div class="div-preguntas" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
                    <div class="preguntas">
                        <div style="padding: 10px 10px;">
                            <button onclick="ocultar()" class="btn-ocultaraparecer">
                                <div class="div-iconospreguntas">
                                    <p class="p-preguntasIconos">¿Qué es un <b>sistema web</b>?</p>
                                    <i class="fa-sharp fa-solid fa-circle-arrow-down fa-circle-arrow-up"></i>
                                </div>
                            </button>
                            <div class="p-preguntas desaparecer" id="parrafo">
                                <p
                                    style="line-height: 1.5; color: #767676; background:#EFEFEF; padding:10px; border-radius: 10px;">
                                    Se denomina sistema web a aquellas aplicaciones de software que puede utilizarse
                                    accediendo a un servidor web a través de Internet o de una intranet mediante un
                                    navegador.
                                    Las aplicaciones web son muy usadas hoy en día, debido a lo práctico del navegador
                                    web como cliente ligero, a la independencia del sistema operativo.
                                    Usar aplicaciones web ahorra dinero. Empleará mejor su tiempo por no tener que
                                    ocuparse de aprender a manejar nuevos programas, ni mantenerlos o hacer copias de
                                    seguridad de sus datos y podrá trabajar desde cualquier sitio. Será más eficiente;
                                    podrá ganar más y gastará menos.
                                </p>
                                <h2 style="margin:10px 10px;">Ventajas de las aplicaciones web</h2>
                                <ul style="width:80%; margin:auto; line-height:1.5; color:#767676;">
                                    <li>Ahorran costes de hardware y software.</li>
                                    <li>Fáciles de usar.</li>
                                    <li>Facilitan el trabajo colaborativo y a distancia.</li>
                                    <li>Escalables y de rápida actualización.</li>
                                    <li>Provocan menos errores y problemas.</li>
                                    <li>Los datos son más seguros.</li>
                                </ul>
                            </div>
                        </div>
                        <div style="padding: 10px 10px;">
                            <button onclick="ocultar1()" class="btn-ocultaraparecer">
                                <div class="div-iconospreguntas1">
                                    <p class="p-preguntasIconos">¿Como se desarrolla una <b>página web</b>?</p>
                                    <i class="fa-sharp fa-solid fa-circle-arrow-down fa-circle-arrow-up"></i>
                                </div>
                            </button>
                            <div class="p-preguntas desaparecer" id="parrafo1">
                                <p>
                                    Para realizar una pagina web se requieren diferentes herramientas y la forma en como
                                    utilizarlas en nuestros proyectos, para ello nosotros como desarrolladores deberemos
                                    realizar un plan de desarrollo que nos permita organizar toda la creación del
                                    proyecto, separando las actividades que realizaran los miembros del equipo de
                                    desarrollo.<br><br>
                                    Si lo vemos desde un ambito de Ingenieria aplicamos <b>métodologias agiles</b> una
                                    de ellas son ...<br><br>
                                </p>
                                1. ¿Qué es una <b>metodología ágil</b>?<br><br>
                                <p>La metodología ágil es un conjunto de técnicas aplicadas en ciclos de trabajo cortos,
                                    con el objetivo de que el proceso de entrega de un proyecto sea más eficiente. Así,
                                    con cada etapa completada, ya se pueden entregar avances y se deja de lado la
                                    necesidad de esperar hasta el término del proyecto.
                                </p><br><br>
                                A continuación se presentara un ejemplo de metodología ágil .... <br><br>

                                <h4>Metodología Rup</h4><br>
                                <div class="metodologia-rup">
                                    <img src="img/metdologia-rup.png" alt="" srcset=""
                                        style="width: 250px; height: 200px;">
                                    <p>Como hemos definido anteriormente, RUP es un acrónimo y significa el Proceso
                                        Unificado Racional. Este proceso se usa preferiblemente para proyectos complejos
                                        con
                                        equipos grandes.<br><br>
                                        En la gestión de un proyecto, el sistema RUP promueve una solución disciplinada,
                                        que
                                        consiste en organizar las tareas y responsabilidades de todos dentro de una
                                        organización
                                    </p><br>
                                </div>
                                <ul style="padding-left: 40px; line-height:1.5; font-size: 14px;">
                                    <li>
                                        <b>Fase de inicio: </b> (se define el alcance del proyecto)
                                        Se define el alcance del proyecto con los clientes, se identifican los riesgos
                                        asociados al proyecto, se elabora el plan de las fases y el de la iteración
                                        posterior, se detalla de manera general la arquitectura del software
                                    </li>
                                    <li>
                                        <b>Fase de Elaboración:</b> (Definición, análisis y diseño)
                                        Se diseña la solución preliminar, se selecciona los casos de uso que permiten
                                        definir la arquitectura base del sistema y se desarrollara el primer análisis
                                        del dominio del problema.
                                    </li>
                                    <li>
                                        <b>Fase de desarrollo o construcción:</b> (implementación)
                                        La función de esta fase es completar la funcionalidad del sistema, se clarifican
                                        los requisitos pendientes, se administran los cambios de acuerdo a las
                                        evaluaciones realizadas por los usuarios, y se realizan las mejoras para el
                                        proyecto.
                                    </li>
                                    <li>
                                        <b>Fase de transición:</b> (fin del proyecto y pruebas)
                                        Fase de cierre, el propósito es asegurar que le software esté disponible para
                                        los usuarios finales, se ajustan los errores y defectos encontrados en las
                                        pruebas de aceptación, se capacitan a los usuarios y se provee el soporte
                                        necesario.
                                        Planear las 4 fases incluye: Asignación de tiempo, Hitos Principales,
                                        Iteraciones por Fases, Plan de proyecto.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div style="padding: 10px 10px;">
                            <button onclick="ocultar2()" class="btn-ocultaraparecer">
                                <div class="div-iconospreguntas2">
                                    <p class="p-preguntasIconos">¿Cómo es <b>cliente servidor</b>?</p>
                                    <i class="fa-sharp fa-solid fa-circle-arrow-down fa-circle-arrow-up"></i>
                                </div>
                            </button>
                            <div class="p-preguntas desaparecer" id="parrafo2">
                                <p style="line-height: 1.5;">
                                    TCP es un protocolo orientado a conexión. No hay relaciones maestro/esclavo. Las
                                    aplicaciones, sin embargo, utilizan un modelo cliente/servidor en las
                                    comunicaciones.
                                    Un servidor es una aplicación que ofrece un servicio a usuarios de Internet; un
                                    cliente es el que pide ese servicio. Una aplicación consta de una parte de servidor
                                    y una de cliente, que se pueden ejecutar en el mismo o en diferentes sistemas.

                                    Los usuarios invocan la parte cliente de la aplicación, que construye una solicitud
                                    para ese servicio y se la envía al servidor de la aplicación que usa TCP/IP como
                                    transporte.

                                    El servidor es un programa que recibe una solicitud, realiza el servicio requerido y
                                    devuelve los resultados en forma de una respuesta. Generalmente un servidor puede
                                    tratar múltiples peticiones(múltiples clientes) al mismo tiempo.
                                </p>
                                <img src="img/clienteservidor.png" alt="">
                            </div>
                        </div>
                        <div style="padding: 10px 10px;">
                            <button onclick="ocultar3()" class="btn-ocultaraparecer">
                                <div class="div-iconospreguntas3">
                                    <p class="p-preguntasIconos">¿Qúe es un <b>dominio</b>?</p>
                                    <i class="fa-sharp fa-solid fa-circle-arrow-down fa-circle-arrow-up"></i>
                                </div>
                            </button>
                            <div class="p-preguntas desaparecer" id="parrafo3">
                                <p class="p-parrafoTexto">
                                    <img src="img/dominio.png" alt="" style="margin: auto;">
                                    Los dominios sirven para acceder a una página web sin necesidad de recordar la
                                    dirección IP donde se encuentra localizada la información del servidor.
                                    Cuando escribimos en el navegador Webempresa.com para acceder a la web, los DNS se
                                    encargan de traducir el dominio web a la dirección IP correcta.
                                    Esta traducción se hace para poder recordar mejorar la dirección de una web, ya que
                                    un nombre de dominio es más identificable que una cadena numérica y así ayudar a que
                                    la navegación sea más sencilla.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-preguntas" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <img src="img/undraw_questions_re_1fy7.svg" alt="">
                </div>
            </div>
        </div>
        <!-- /FROMULARIO/ -->
        <div style="margin-top:50px;">
            <h1 style="text-align: center; margin-bottom:10px; font-size: 40px;"> FORMULARIO DE
                <span>CONTACTO</span>
            </h1>
            <div style="width:30%; margin:auto; padding-bottom:70px;">
                <marquee behavior="" direction="">
                    <div style="border-bottom:3px solid rgb(51, 72, 167);"></div>
                </marquee>
            </div>
        </div>
        <div class="formulario1" style="display:flex; justify-content:space-between;">
            <div class="formulario">
                <div class="formulario-inputs" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h1 style="margin:10px;">Ingrese sus datos AQUI</h1>
                    <div class="form-inputs">
                        <div>
                            <input type="text" id="nombres" name="nombres" placeholder="Nombres*" style="width: 100%;"
                                require>
                        </div>
                        <div style="display: flex; justify-content:space-between;">
                            <input type="text" id="paterno" name="paterno" placeholder="Apellido Paterno*"
                                style="width:47%" require>
                            <input type="text" id="materno" name="materno" placeholder="Apellido Materno*"
                                style="width:47%" require>
                        </div>
                        <div>
                            <input type="email" id="email" name="email" placeholder="E-mail*" style="width: 100%;"
                                require>
                            <div id="resultEmail"></div>
                        </div>
                        <div style="display: flex; justify-content:space-between;">
                            <input type="text" id="dni" name="dni" maxlength="8" placeholder="Nro. de documento*"
                                style="width:47%" require>
                            <input type="text" id="celular" maxlength="9" name="celular" placeholder="Celular*"
                                style="width:47%" require>
                        </div>
                        <div>
                            <textarea name="comentario" id="comentario" cols="30" rows="7" style="width:100%;"
                                placeholder="Comentarios*"></textarea>
                        </div>
                        <div style="display: flex; justify-content:space-evenly;">
                            <input type="checkbox" id="terminos" name="terminos" style="margin:auto;"
                                onclick="checkBoton()">
                            <p style="width:85%">Autorizo el tratamiento de mis datos según los términos contenidos en
                                el siguiente enlace</p>
                        </div>
                        <div style="width:50%;" class="btn-form">
                            <button onclick="clientes()" disabled style="width:100%; padding:10px; font-size:17px;"
                                id="btnclientes" onsubmit="return validarCampos();">Enviar</button>
                        </div>
                        <div id="clientesRespuesta">
                        </div>
                        <div id="sugerencias">
                        </div>
                        <div id="sitios">
                        </div>
                    </div>
                </div>
            </div>
            <div class="imagen-form" style="width: 50%; display:flex; align-items:center;" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500"> 
                <img src="img/laptop.png" alt=""
                    style="width: 100%; border-top-left-radius:50%; border-bottom-left-radius:50%;">
            </div>
        </div>
        <div style=" margin: 50px 0px 0px 0px;">
            <footer>
                <div class="footer-contenedor">
                    <div class="footer-1">
                        <div class="footer-1-a">
                            <h1>Máster Web</h1>
                            <i class="fa-solid fa-computer"></i>
                        </div>
                        <div class="footer-1-b">
                            <p>En esta página se reserva los derechos de autor para los creadores de este contendio
                            </p>
                        </div>
                        <div class="footer-1-c">
                            <textarea name="sugerencias" id="sugerencias" cols="27" rows="5"></textarea>
                        </div>
                        <div class="footer-1-d">
                            <button onclick="mandarSugerencias('listado');">Sugerencias</button>
                        </div>
                    </div>
                    <div class="footer-2">
                        <div class="lista-footer">
                            <h2>Contáctenos en </h2>
                            <?php 
                                $sql = "SELECT * FROM infoempresa";
                                $query = mysqli_query($cn,$sql);
                                while($mostrar = mysqli_fetch_array($query)){
                            ?>
                            <li class="lista1"><i class="fa-solid fa-location-dot"></i>
                                <p class="p-empresa"><?php echo $mostrar['direccion']; ?></p>
                            </li>
                            <li class="lista1"><i class="fa-solid fa-phone-volume"></i>
                                <p class="p-empresa"><?php echo $mostrar['telefono']; ?></p>
                            </li>
                            <li class="lista1"><i class="fa-regular fa-envelope"></i>
                                <p class="p-empresa"><?php echo $mostrar['correo']; ?></p>
                            </li>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="footer-3">
                        <div class="footer-3-a">
                            <h2>Mas información en </h2>
                            <li>Téminos y condiciones</li>
                            <li>Preguntas frecuentes</li>
                            <li>Recomendaciones</li>
                            <li>Aportes de trabajo</li>
                        </div>
                    </div>
                    <div class="footer-4">
                        <div>
                            <img src="img/libro.png" alt="" style="width:100%;">
                            <p style="text-align: center;">Libro de reclamaciones</p>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="icono-contactos" style="background: #222; ">
                <div class="iconos-final">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-behance"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
            </div>
        </div>
        <div class="derechos">
            <p>© Copyright 2023, Máster Web. Todos los derechos reservados.</p>
        </div>

        
        <a href="https://api.whatsapp.com/send?phone=+947204863" class="btn-wsp" target="_blank">
            <i class="fa fa-whatsapp icono"></i>
        </a>
    </div>
    <script src="js/main.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>