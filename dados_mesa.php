<?php

    if(!empty($_GET['id'])){
    
        include_once('config.php');

        $id = $_GET['id'];

    }else{
        header('Location: registro.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de Teste</title>
    <style>
        @charset "UTF-8";
a{
    text-decoration: none;
    color: white;
    border-radius: 10px;
    padding: 10px;
    background-image: linear-gradient(to right, rgb(173, 7, 224), rgb(81, 81, 175));
}
a:hover{
    background-image: linear-gradient(to right, rgb(124, 7, 160), rgb(55, 55, 119));
}
header{
    color: rgb(255, 255, 255);
    text-align: center;
}
body{
    background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    font: normal 15pt Arial, Helvetica, Sans-serif;
    background-attachment: fixed;
}
.box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.466);
    padding:15px;
    border-radius: 15px;
    color: white;
}
fieldset{
    border: 3px solid dodgerblue;
}
legend{
    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color: dodgerblue;
    border-radius: 5px;
}
footer{
    color: white;
    text-align: center;
    font-style: italic;
}
.inputBox{
    position: relative;
}
.inputRes{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
.inputRes:focus ~ .labelInput,
.inputRes:valid ~ .labelInput{
    top: -20px;
    font-size: 16px;
    color: dodgerblue;
}
.labelRadio{
    cursor: pointer;
}
#um{
    cursor: pointer;
}
#dois{
    cursor: pointer;
}
#tres{
    cursor: pointer;
}
#Salvar{
    background-image: linear-gradient(to right, rgb(7, 163, 224), rgb(26, 26, 151));
    width: 100%;
    border: none;
    padding: 10px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#Salvar:hover{
    background-image: linear-gradient(to right, rgb(6, 137, 189), rgb(17, 17, 94));
}
    </style>
</head>
<body>
    <header>
        <h1>Entrada de Teste</h1>
    </header>
    <div id="banco_dados">
        <nav>
            <a href="registro.php">Banco de dados</a>
        </nav>
    </div>
    <div class="box">
        <form action="saveTeste.php" method="POST">
            <fieldset>
                <legend>Teste de Mesa</legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="fluxo" id="fluxo" class="inputRes" required>
                    <label for="fluxo" class="labelInput">Fluxo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="descarte" id="descarte" class="inputRes" required>
                    <label for="descarte" class="labelInput">Descarte</label>
                </div>
                <div>
                <p>Tempo:</p>
                <input type="radio" name="tempo" id="tempo1" value="60" required>
                <label for="tempo1" class="labelRadio">60</label>
                <input type="radio" name="tempo" id="tempo2" value="240" required>
                <label for="tempo2" class="labelRadio">15</label>
                <input type="radio" name="tempo" id="tempo3" value="600" required>
                <label for="tempo3" class="labelRadio">6</label>
                <br>
                <br>
                <div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" value="Salvar" name="Salvar" id="Salvar">
                </div>
                
            </fieldset>
        </form>
    </div>
</body>
</html>