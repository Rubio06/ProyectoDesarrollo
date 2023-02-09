
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,700;1,700&family=Dosis:wght@500;600&family=Heebo:wght@100;200;300&family=Lilita+One&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                    <button class="boton"><span style="font-size: 30px; margin: auto;"class="material-symbols-outlined">keyboard_double_arrow_down</span><p style="margin:auto;">Obtener información</p></button>
                </div>
            </section>
            <div class="efecto-cabecera" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C150.00,150.00 351.74,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #f9f9f9;"></path></svg></div>
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
                <p>Lo que funciona hoy lo hara a futuro, los buenos resultados es el producto de la perseverancia y trabajo en equipo, la mejora continua es el aprendizaje constante.</p>
                <button id="abrir">Conócenos</button>
            </div>
        </div>
        <!-- CUARTO BLOQUE -->
        <div class="div-desarrollo" style="background: #EFEFEF; width: 100%;">
            <div>
                <img src="img/imagen2.png" alt="" class="img-sistemas1">
                <h2 class="titulo-desarrollo">Diseño de págima web</h2>
                <p class="parrafo-desarrollo">Nuestro servicio de diseño de páginas web, es desarrollado con diferentes tecnologías dependiendo del tipo de sitio de su elección. Nuestra empresa no se preocupa tan solo del diseño del sitio, sino también que el sitio web contenga los canales de comunicación con su potencial cliente, como por ejemplo: Formularios de contacto, teléfonos visibles, WhatsApp web, botones para cotizar, botones de llamada y estadísticas.</p>
            </div>
            <div>
                <img src="img/telefono.png" alt="" class="img-sistemas2">
                <h2 class="titulo-desarrollo">Aplicaciónes moviles</h2>
                <p class="parrafo-desarrollo">Tenemos un staff de profesionales competentes en el mundo del desarrollo de aplicaciones móviles, manejando distintas herramientas para el desarrollo de estos tipos de sistemas, se toma encuenta los requerimientos establecidos por los usuarios proponiendo un analisis exahustivo en el que nuestros clientes desean implementar para ello contamos con profesionales capacitados para tales proyectos de aplicaciones.</p>
            </div>
            <div>
                <img src="img/escritorio.png" alt="" class="img-sistemas3"> 
                <h2 class="titulo-desarrollo">Programas de escritorio</h2>
                <p class="parrafo-desarrollo">Gran parte del sector empresarial utilizan estos tipos de sistemas, la ventaja de estos sistemas de información es que pueden funcionar sin la necesidad de conectarse a internet caso contrario con los sistemas web u otras tecnologías que funcionan con acceso a internet. Un gran porcentaje de empresas que inician seleccionan estos tipos de sistemas permitiendo ya que es mas facil su desarrollo e implmentación.
                </p>
            </div>
        </div>
        
    </div>
    <script src="js/main.js"></script>
</body>
</html>