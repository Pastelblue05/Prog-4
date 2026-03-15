<?php
include "conn.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM Comentarios WHERE id = '$id'";

    $conn->query($sql);
}

header("Location: index.php");
exit();
?>