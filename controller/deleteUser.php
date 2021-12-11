<?php

if (isset($_POST['delete'])) {
    $id = $_POST['idUser'];

    $pdo = require_once '../pdo/connection.php';
    $sql = "delete from usuario where idUser = ?";
    $sth = $pdo->prepare($sql);
    $sth->bindParam(1, $id, PDO::PARAM_INT);
    $sth->execute();
    unset($sth);
    unset($pdo);
    header("Location: ../view/listaUsuarios.php");
}

?>