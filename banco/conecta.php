<?php

//Informações de Conexão
$server = "localhost";
$user_db = "root";
$password_db = "";
$database = "ppi2";

error_reporting(0); //Ocultar erros

function conecta_banco (){
    global $server, $user_db, $password_db, $database;
try {
    $conecta = mysql_connect($server, $user_db, $password_db); //Efetua conexão com a base de dados
    mysql_set_charset("utf8", $conecta); //Envia os dados do PHP como charset UTF8
    mysql_select_db($database);
  if (!$conecta){
      echo '<script>alert("Erro ao se conectar a base de dados");</script>';
  }
   
} catch (Exception $ex) {
  $error = mysql_errno();  
}
if ($conecta){
    return true;
}

}

function fecha_banco (){
    mysql_close();
}




