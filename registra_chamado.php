<?php
    $arquivo = fopen('arquivo.hd', 'a');
    $texto = str_replace('|' , '/' , $_POST['criador']) . "|" .str_replace('|' , '/' , $_POST['titulo']) . "|" . str_replace('|' , '/' , $_POST['categoria']) . "|" . str_replace('|' , '/' , $_POST['descricao']) . PHP_EOL; //ou PHP_EOL
    fwrite($arquivo, $texto);
    fclose($arquivo);
    header('Location: home.php');
?>