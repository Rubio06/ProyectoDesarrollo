<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modal</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <div id="miModal" class="modal">
        <div class="flex" id="flex">
            <div class="contenido-modal">
                <div class="modal-header flex">
                    <h2>¿Quienes somos?</h2>
                    <span class="close" id="close">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="div-cuerpo" style="width: 100%; margin:auto; background:#f7f4ef">
                        <div class="div-parrafo" style="width: 100%;">
                            <p class="p-parrafo">Nuestro mayor satisfacción es la creación de proyectos tecnologícos que ayude a las empresas de diferentes rubros a obtener nuevos clientes con el objetivo de darle una asesoria rapida y eficaz mediante los sistemas de información que nuestro equipo desarrolla, para ello se aplican diferentes técnicas</p>
                            <div class="btn-parrafo"> 
                                <button onclick="cargarurl('quienes/mision.php','detalle')">Misión</button>
                                <button onclick="cargarurl('quienes/vision.php','detalle')">Visión</button>
                                <button onclick="cargarurl('quienes/valores.php','detalle')">Valores</button>
                            </div>
                        </div>
                    </div>
                    <div id="detalle"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>