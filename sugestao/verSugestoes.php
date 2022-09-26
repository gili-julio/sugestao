<?php

include_once('config.php');

$sql = "SELECT * FROM sugestao";
$result = $conexao->query($sql);


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Sugestões</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(0, 128, 0, 0.4);
            font-family: 'Courier New', Courier, monospace;
        }
        p {
            word-break: break-word;
        }
    </style>
</head>

<body>

    <div class="text-end" style="margin-right: 2rem;">
            <img src="atacadaologo.png" alt="logo do atacadão" width="167" height="80">
    </div>
    <div class="text-center">
        <h1>Sugestões</h1>
        <br><br>
    </div>

    <?php
    
    if(mysqli_num_rows($result) == 0){echo '<h1 class="text-center">Nenhuma sugestão</h1>';} else {
        $contador = 0;
        echo '<div class="row">';
        while($tabela = mysqli_fetch_assoc($result)){

            echo '<div class="bg-light col" style="margin-left: 3rem; margin-right: 3rem; padding: 30px; border-radius: 10px;">
            <p><strong>ID:</strong> '.$tabela['id'].'</p>
            <p><strong>Identificação:</strong> '.$tabela['nome'].'</p>
            <p>'.$tabela['sugestao'].'</p>';
            if($tabela['imagem'] == 'nenhuma'){}else{
                echo    '<div class="text-center">
                            <a href="fotos/'.$tabela['imagem'].'"><img src="fotos/'.$tabela['imagem'].'" width="100" height="100"></a>
                        </div>';
            }

            echo '</div>';

            if($contador == 2){
                echo '</div><br><br>';
                echo '<div class="row">';
                $contador = 0;
            }else{$contador++;}
            
        }
        if($contador != 0){echo '</div><br><br>';}
    }
    
    ?>
    <br><br><br><br>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>