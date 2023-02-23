<?php
    include("conexion/conexion.php");
    $cn = Conectarse();

    $nombres = strtoupper($_GET['nombres']);
    $paterno = strtoupper($_GET['paterno']);
    $materno = strtoupper($_GET['materno']);
    $email = strtoupper($_GET['email']);
    $dni = $_GET['dni'];
    $celular = $_GET['celular'];
    $comentario = $_GET['comentario'];
    $terminos = $_GET['terminos'];

    $sql = "INSERT INTO clientes(`nombres`, `paterno`, `materno`, `email`, `dni`, `celular`, `comentario`, `terminos`) VALUES ('$nombres','$paterno','$materno','$email','$dni','$celular','$comentario','$terminos')";
    $execute = mysqli_query($cn,$sql);
?>