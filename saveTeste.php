<?php
    
    include_once('config.php');

    if(isset($_POST['submit'])){

        $id = $_GET['id'];
        $fluxo = $_POST['fluxo'];
        $descarte = $_POST['descarte'];
        $tempo = $_POST['tempo'];
        $fluxoh = $fluxo * 600;
        $descarteh = $descarte * $tempo;
        $fluxot = $fluxoh + $descarteh;
        $descartep =($descarteh * 100) / $fluxoh;

        $result = mysqli_query($conexao, "INSERT INTO registro_mesa(fluxo,descarte,fluxoh,descarteh,fluxot,descartep,data,hora) VALUES ('$fluxo','$descarte','$fluxoh','$descarteh','$fluxot','$descartep',now(),now())");
    }
    header('Location: registro.php');
?>