<?php
include "conn.php";

$id = $_GET['id'];

if(isset($_POST['actualizar'])){
    $nombre = $_POST['nombre_apellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $nota = $_POST['nota'];

    $sql = "UPDATE Comentarios 
            SET nombre_apellido='$nombre',
                usuario='$usuario',
                email='$email',
                nota='$nota'
            WHERE id='$id'";

    $conn->query($sql);

    header("Location: index.php");
    exit();
}

$query = $conn->query("SELECT * FROM Comentarios WHERE id='$id'");
$row = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar comentario</title>
<link rel="stylesheet" href="test/css/styles.css">
</head>

<body>

<div class="editar-container">
    <h2>Editar comentario</h2>
    <form method="POST" class="form-editar">

        <input type="text" name="nombre_apellido" value="<?php echo $row['nombre_apellido']; ?>" required>
        <input type="text" name="usuario" value="<?php echo $row['usuario']; ?>">
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <textarea name="nota" required><?php echo $row['nota']; ?></textarea>

        <button type="submit" name="actualizar" class="btn-actualizar">Actualizar comentario</button>
    </form>
    <a href="index.php" class="volver">← Volver</a>
</div>

</body>
</html>