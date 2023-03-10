<?php

    if(!empty($_GET['id'])){
    
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM registro WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $hibrido = $user_data['hibrido'];
                $silo = $user_data['silo'];
                $peneira = $user_data['peneira'];
                $mesa = $user_data['mesa'];
                $turno = $user_data['turno'];
            }
        }else{
            header('Location: registro.php');
        }
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
    <title>Editor de Dados</title>
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
#update{
    background-image: linear-gradient(to right, rgb(7, 163, 224), rgb(26, 26, 151));
    width: 100%;
    border: none;
    padding: 10px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#update:hover{
    background-image: linear-gradient(to right, rgb(6, 137, 189), rgb(17, 17, 94));
}
    </style>
</head>
<body>
    <header>
        <h1>Edi????o de Dados</h1>
    </header>
    <div id="banco_dados">
        <nav>
            <a href="registro.php">Banco de dados</a>
        </nav>
    </div>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend>Registro de Dados</legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="hibrido" id="hibrido" class="inputRes" value="<?php echo $hibrido ?>" required>
                    <label for="hibrido" class="labelInput">H??brido</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="silo" id="silo" class="inputRes" value="<?php echo $silo ?>" required>
                    <label for="silo" class="labelInput">Silo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="peneira" id="peneira" class="inputRes" value="<?php echo $peneira ?>" required>
                    <label for="peneira" class="labelInput">Peneira</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="mesa" id="mesa" class="inputRes" value="<?php echo $mesa ?>" required>
                    <label for="mesa" class="labelInput">Mesa</label>
                </div>
                <div>
                    <p>Turno:</p>
                <input type="radio" name="turno" id="um" value="1??" <?php echo $turno == '1??' ? 'checked' : '' ?> required>
                <label for="um" class="labelRadio">1??</label>
                <br>
                <input type="radio" name="turno" id="dois" value="2??" <?php echo $turno == '2??' ? 'checked' : '' ?> required>
                <label for="dois" class="labelRadio">2??</label>
                <br>
                <input type="radio" name="turno" id="tres" value="3??" <?php echo $turno == '3??' ? 'checked' : '' ?> required>
                <label for="tres" class="labelRadio">3??</label>
                </div>
                <br>
                <div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" value="Salvar" name="update" id="update">
                </div>
                
            </fieldset>
        </form>
    </div>
    <script>

    </script>
</body>
</html>