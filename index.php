<?php


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envie sua Sugestão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(0, 128, 0, 0.4);
            font-family: 'Courier New', Courier, monospace;
        }

        .form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 10px;
        }
        .foto{
            display: none;
        }
        .labelfoto{
            color: white;
            height: 60px;
            width: 250px;
            background-color: rgb(0, 128, 0, 0.8);
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .labelfoto:hover{
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="text-end" style="margin-right: 2rem;">
            <img src="atacadaologo.png" alt="logo do atacadão" width="167" height="80">
    </div>

    <div class="form bg-light">
        <form action="send.php" method="POST" enctype="multipart/form-data">
            <div class="inputBox">
                <label>Nome:</label>
                <br>
                <input type="text" class="form-control" name="nome" autocomplete="off" placeholder="(Opcional)">
                <br>
                <label>Sugestão:</label>
                <br>
                <textarea class="form-control" name="sugestao" rows="3"></textarea>
                <br>
                <label class="labelfoto" for="foto">Escolher uma foto</label>
                <input class="foto" type="file" id="foto" name="foto" accept=".jpg,.gif,.png,.jpeg" >
                <br>
            </div>
            <div class="text-center">
                <input class="btn btn-success" type="submit" name="submit" value="Enviar">
            </div>

        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>
