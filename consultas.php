<?php
    include("conexion/conexion.php");
    $cn = Conectarse();

    if (isset($_POST["op"])) {
        $op = $_POST["op"];
        if ($op == "mandarClientes") {
            $nombres = strtoupper($_POST['nombres']);
            $paterno = strtoupper($_POST['paterno']);
            $materno = strtoupper($_POST['materno']);
            $email = $_POST['email'];
            $dni = $_POST['dni'];
            $celular = $_POST['celular'];
            $comentario = $_POST['comentario'];
            if ($nombres !== "" || $paterno  !== "" || $materno !== "" || $email !== "" || $dni !== "" || $celular !== "" || $comentario !== "") {
                $sql = "INSERT INTO clientes(`nombres`, `paterno`, `materno`, `email`, `dni`, `celular`, `comentario`) VALUES ('$nombres','$paterno','$materno','$email','$dni','$celular','$comentario')";
                $execute = mysqli_query($cn,$sql);
            } else {
                echo "Debe de completar los espacios en blanco";
            }
            
        }else if($op == "mandarLink"){
            $sitio = $_POST['sitio'];
            $sql = "INSERT INTO `sitios`(`sitioWeb`) VALUES ('$sitio')";
            $execute = mysqli_query($cn,$sql);
        
        }else if($op == "mandarSugerencias"){
            $sugerencia = $_POST["sugerencias"];
            $sql = "INSERT INTO `sugerencias`(`sugerencia`) VALUES ('$sugerencia')";
            $query = mysqli_query($cn,$sql);
        }
    }
?>