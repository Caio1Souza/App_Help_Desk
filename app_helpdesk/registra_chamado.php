<?php
    session_start();
    $titulo = str_replace("#", "-", $_POST['titulo']);
    $categoria = str_replace("#", "-", $_POST['categoria']);
    $descricao = str_replace("#", "-", $_POST['descricao']);
  
    $arquivo = fopen('../../app_help_desk/arquivo.txt', "a"); //abrir arquivo

    $texto = $_SESSION['id'] . ' # ' . $titulo . " # ". $categoria ." # ". $descricao . PHP_EOL;

    fwrite($arquivo, $texto); //escrever o texto no arquivo
    fclose($arquivo); //fechar o arquivo

   
    header('Location: abrir_chamado.php');
?>