<?php
include_once('config.php');

if(isset($_POST['submit']) && !empty($_POST['sugestao'])){

    $sugestao = $_POST['sugestao'];
    if(empty($_POST['nome'])){$nome = 'Anônimo';} else {$nome = $_POST['nome'];}
    try {
        if(empty(basename($_FILES["foto"]["name"]))){
            $foto = 'nenhuma';
        } 
        else {
            $target_dir = "/fotos/";
            $target_file = $target_dir . basename($_FILES["foto"]["name"]);
            move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
            $foto = basename($_FILES["foto"]["name"]);
        }
        $sql = "INSERT INTO `sugestao` (`sugestao`, `nome`, `imagem`) VALUES ('$sugestao', '$nome', '$foto')";
        $result = $conexao->query($sql);

        header('Location: sugestaoEnviada.php');
    } catch (Exception $e) {
        header('Location: index.php');
    }
    
} else {
    header('Location: index.php');
}

?>
