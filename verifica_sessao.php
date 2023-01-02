<?php
    session_start();
    if(!isset($_SESSION['validacao']) || $_SESSION['validacao'] == 'NAO'){
        header('Location: index.php?login=nao_logado');
    }
?>