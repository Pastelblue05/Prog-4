<!DOCTYPE html>
<html lang="VE-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/marcador.png" type="image/x-icon">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="test/css/styles.css">
    <title>Portafolio de Pastelblue05</title>
</head>
<body>

<header>
    <h2><a class="logo" href="#">PORTAFOLIO DE SNOOPY</a></h2>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Aventuras</a>
        <a href="#">Mood</a>
        <a href="#">Contacto</a>
    </nav>
</header>

 <section class="inicio">
        <h1>Bienvenido al portafolio de Snoopy</h1>
        <p>Espero que disfrutes de este portafolio</p>
    </section>

<section class="aventuras">
    <img src="assets/descargar (1).jpg" alt="Snoopy" class="snoopy-image">
    <img src="assets/descargar (2).jpg" alt="Snoopy" class="snoopy-image">
    <img src="assets/descargar (3).jpg" alt="Snoopy" class="snoopy-image">
    <img src="assets/descargar.jpg" alt="Snoopy" class="snoopy-image">
    <img src="assets/Snoopy Wallpaper En 2021  73F.jpg" alt="Snoopy" class="snoopy-image">
</section>

<section class="mood">
    <div class="card">
        <img src="assets/Snoopy 73F.jpg.jpeg" alt="">
        <h3>Gym</h3>
    </div>

    <div class="card">
        <img src="assets/snoopy cookie.jpeg" alt="">
        <h3>Cookie Lover</h3>
    </div>

    <div class="card">
        <img src="assets/snoopy grad.jpeg" alt="">
        <h3>Graduado</h3>
    </div>

    <div class="card">
        <img src="assets/snoopy yo.jpeg" alt="">
        <h3>Paz</h3>
    </div>
</section>

<section id="Comentarios" class="bg-dark mt-3 p-3"> 
    <div class="container-fluid row text-light">
        <form action="conn.php" method="POST" class="formulario-snoopy">
            <h2>Deja tu opinion de Snoopy</h2>        
            <?php 
            include "conn.php"; 
            ?>
            <input type="text" name="nombre_apellido" placeholder="Nombre Apellido" required>
            <input type="text" name="usuario" placeholder="Nombre de Usuario (Opcional)">
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <textarea name="nota" placeholder="Escribe tu nota aquí..." maxlength="1000" required></textarea>
              
                <button type="submit" name="enviar">Enviar</button>
            </form>
        <div class="lista-notas">
            <h3>Notas Recientes:</h3>
        </div>
    <?php
        $query = $conn->query("SELECT * FROM Comentarios ORDER BY id DESC");

        while($row = $query->fetch_assoc()){
        ?>
            <div class="comentario-card">

                <div class="comentario-header">
                    <h3><?php echo $row['nombre_apellido']; ?></h3>
                    <span class="fecha"><?php echo $row['fecha_nota']; ?></span>
                </div>

                <span class="usuario">@<?php echo $row['usuario']; ?></span>

                <p class="comentario-texto">
                    <?php echo $row['nota']; ?>
                </p>

                <a href="eliminar.php?id=<?php echo $row['id']; ?>" 
                class="btn-eliminar"
                onclick="return confirm('¿Seguro que deseas eliminar este comentario?')">Eliminar
                </a>

            </div>
<?php
}
?>
    
    </div>   
</section>


<footer>
    <p>2026 Portafolio Pastelblue05 - Todos los derechos reservados.</p>
    <a href="#">www.pastelblue05.com</a>
</footer>

</body>
</html>