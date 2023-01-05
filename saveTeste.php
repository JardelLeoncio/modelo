<?php
    
    if(isset($_POST['Salvar'])){

        include_once('config.php');

        $id = $_POST['id'];
        $fluxo = $_POST['fluxo'];
        $descarte = $_POST['descarte'];
        $tempo = $_POST['tempo'];
        $fluxoh = $fluxo * 600;
        $descarteh = $descarte * $tempo;
        $fluxot = $fluxoh + $descarteh;
        $descartep =($descarteh * 100) / $fluxoh;

        $result = mysqli_query($conexao, "INSERT INTO registro_mesa(fluxo,descarte,fluxoh,descarteh,fluxot,descartep,data,hora,id_id) VALUES ('$fluxo','$descarte','$fluxoh','$descarteh','$fluxot','$descartep',now(),now(),'$id')");       
    }   
    header('Location: registro.php');
?>