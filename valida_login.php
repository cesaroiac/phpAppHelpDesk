<?php
    session_start(); 

    $usuarios_app = array(
        array('id' => '1', 'email' => 'cesar@gmail.com', 'senha' => '12345', 'tipo' => '1'),
        array('id' => '2', 'email' => 'caiocesar@gmail.com', 'senha' => '12345' , 'tipo' => '1'),
        array('id' => '3', 'email' => 'caio@gmail.com', 'senha' => '12345', 'tipo' => '2')
    );

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $validacao = false;
    $id_usuario = null;
    $tipo_usuario = null;

    foreach($usuarios_app as $key=>$u){
        if($u['email'] == $email && $u['senha'] == $senha){
            $validacao = true;
            $id_usuario = $u['id'];
            $tipo_usuario = $u['tipo'];
        }
    }

    if($validacao == true){
        $_SESSION['validacao'] = "SIM";
        $_SESSION['email'] = $email;
        $_SESSION['tipo'] = $tipo_usuario;
        $_SESSION['id'] = $id_usuario;
        header('Location: home.php');
    }
    else{
        $_SESSION['validacao'] = "NAO";
        header('Location: index.php?login=erro');
    }

?>