<?php

require_once '../banco/conecta.php';

$login = isset($_POST['backend_login']) ? $_POST['cad_login'] : '';
$senha = isset($_POST['backend_senha']) ? $_POST['cad_passwd'] : '';


conecta_banco();

$buscar = "SELECT * FROM usuario WHERE login = '$login' and senha = '$senha'";
$verifica = mysql_query($buscar);

if (mysql_num_rows($verifica) <= 0) {
    echo "<script> alert('Usuário ou senha incorreto.'); </script>";
    } else {
        //Aqui devo fazer a sessão
        
        session_start();
        $registro = mysql_fetch_array($verifica);
        $_SESSION["nome_usuario"] = $registro['nome_usuario'];
        $_SESSION['cod_usuario'] = $registro['cod_usuario'];
}


