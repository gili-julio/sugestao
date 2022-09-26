<?php

include_once('config.php');

$sql = "DELETE FROM `sugestao` WHERE (`id` != '9999999')";
$result = $conexao->query($sql);

/* while($tabela = mysqli_fetch_assoc($result)){
    echo $tabela['id'].'<br>';
    echo $tabela['nome'].'<br>';
    echo $tabela['sugestao'].'<br>';
    if($tabela['imagem'] == 'nenhuma'){
        echo $tabela['imagem'].'<br>'.'<br>'.'<br>';
    } else {
        echo '<img src="fotos/'.$tabela['imagem'].'">'.'<br>'.'<br>'.'<br>';
    }
} */


?>