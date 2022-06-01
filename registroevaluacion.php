<?php
include('conec.php');
if(isset($_POST['enviar'])){

    $nombre = $_POST ['nombre'];
    $ApellidoPaterno = $_POST ['ApellidoPaterno'];
    $ApellidoMaterno = $_POST ['ApellidoMaterno'];
    $Telefono = $_POST ['Telefono'];
    $Correo = $_POST ['Correo'];
    $Usuario = $_POST ['Usuario'];
    $Pasword = $_POST ['Pasword'];
    $insertarevaluacion = "INSERT INTO evaluacion (nombre,ApellidoPaterno,ApellidoMaterno,Telefono,Correo,Usuario,Pasword) 
    VALUE ('$nombre','$ApellidoPaterno','$ApellidoMaterno','$Telefono','$Correo','$Usuario','$Pasword')";
    $resultado = mysqli_query ($conexion,$insertarevaluacion);

    if(!$resultado){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
}
header('Location: evaluacion.php');
?>