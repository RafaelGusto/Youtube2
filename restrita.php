<?php
require('config/conexao.php');

//VERIFICACAO DE AUTENTICAÇAO
$user = auth($_SESSION['TOKEN']);
if($user){
    echo "<h1> SEJA BEM-VINDO <b style='color:red'>".$user['nome']."!</b></h1>";
    echo "<br><br><a style='background:green; color:white; text-decoration:none; padding:20px; border-radius:10px;' href='logout.php'>Fazer Logout</a> ";
}else{
    //REDIRECIONAR PARA LOGIN
    header('location: index.php');
}
/*
//VERIFICAR SE TEM AUTORIZACAO
$sql = $pdo->prepare("SELECT * FROM usuarios WHERE token = ? LIMIT 1");
$sql->execute(array($_SESSION['TOKEN']));
$usuario = $sql->fetch(PDO::FETCH_ASSOC);
//SE NÃO ENCONTRAR O USUARIO
if(!$usuario){
    header('location: index.php');
}else{
    echo "<h1> SEJA BEM-VINDO <b style='color:red'>".$usuario['nome']."!</b></h1>";
    echo "<br><br><a style='background:green; color:white; text-decoration:none; padding:20px; border-radius:10px;' href='logout.php'>Fazer Logout</a> ";
}
*/
