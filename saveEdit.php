<?php

    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $hibrido = $_POST['hibrido'];
        $silo = $_POST['silo'];
        $peneira = $_POST['peneira'];
        $mesa = $_POST['mesa'];
        $turno = $_POST['turno'];

        $sqlUpdate = "UPDATE registro SET hibrido='$hibrido',silo='$silo',peneira='$peneira',mesa='$mesa',turno='$turno' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: registro.php');
?>