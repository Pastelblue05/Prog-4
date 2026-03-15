<?php

    $conn = new mysqli("localhost", "root", "", "portafolio_snoopy");
    $conn->set_charset("UTF8");

    if(isset($_POST['enviar'])){

$nombre = $_POST['nombre_apellido'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$nota = $_POST['nota'];
$fecha = date("Y-m-d");

$sql = "INSERT INTO Comentarios (nombre_apellido, usuario, email, nota, fecha_nota)
VALUES ('$nombre','$usuario','$email','$nota','$fecha')";

$conn->query($sql);

header("Location: index.php");
exit();
}
?>