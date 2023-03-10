<?php

    include_once('config.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM registro_mesa join registro on registro.id = registro_mesa.id_id WHERE registro.id=$id";

    $sql_table01 = "SELECT * FROM registro WHERE id=$id";

    $result = $conexao->query($sql);
    $result01 = $conexao->query($sql_table01);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de Testes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .voltar{
            text-decoration: none;
            color: white;
            border-radius: 10px;
            padding: 10px;
            background-image: linear-gradient(to right, rgb(7, 163, 224), rgb(26, 26, 151));
        }
        .voltar:hover{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .retorno{
            margin: 20px;
        }
        body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
        }
        .table-light{
            color: black;
        }
        .th{
            margin: 0 3rem!important;
            background-color: black;
            border-radius: 15px 15px 0 0;

        }
        .m-5{
            margin: 0 3rem!important;
        }
        .table{
            margin: 0px;
        }
        .sub_th{
            color: orange;
        }
        tbody{
            color: aqua;
        }
    </style>
</head>
<body>
<div class="retorno">
        <nav>
            <a class="voltar" href="registro.php">Voltar</a>
        </nav>
    </div>
    <div class="titulo">
        <h1>
            Teste de Mesa
        </h1>
    </div>
    <div class="th">
        <table class="table">
               <thead class="table-column">
                <?php
                while($user_data = mysqli_fetch_assoc($result01)){
                    echo "<tr>";
                    echo "<th class='sub_th'>H??brido: " . $user_data['hibrido'] . "</td>";
                    echo "<th class='sub_th'>Silo: " . $user_data['silo'] . "</td>";
                    echo "<th class='sub_th'>Peneira: " . $user_data['peneira'] . "</td>";
                    echo "<th class='sub_th'>Mesa: " . $user_data['mesa'] . "</td>";
                    echo "<th class='sub_th'>Turno: " . $user_data['turno'] . "</td>";
                    echo "</tr>";
                }
            ?>
            </thead>
        </table>
    </div>
    <div class="m-5">
        <table class="table table-bg">

            <thead class="table-light">
                <tr class="table-colun">
                    <th scope="col" class="coluna">#</th>
                    <th scope="col" class="coluna">Fluxo</th>
                    <th scope="col" class="coluna">Descarte</th>
                    <th scope="col" class="coluna">Fluxo/H</th>
                    <th scope="col" class="coluna">Descarte/H</th>
                    <th scope="col" class="coluna">Fluxo/T</th>
                    <th scope="col" class="coluna">%</th>
                    <th scope="col" class="coluna">Data</th>
                    <th scope="col" class="coluna">Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>" . $user_data['id'] . "</td>";
                        echo "<td>" . $user_data['fluxo'] . "</td>";
                        echo "<td>" . $user_data['descarte'] . "</td>";
                        echo "<td>" . $user_data['fluxoh'] . "</td>";
                        echo "<td>" . $user_data['descarteh'] . "</td>";
                        echo "<td>" . $user_data['fluxot'] . "</td>";
                        echo "<td>" . $user_data['descartep'] . "</td>";
                        echo "<td>" . $user_data['data'] . "</td>";
                        echo "<td>" . $user_data['hora'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>