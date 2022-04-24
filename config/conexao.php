<?php
/* DOIS MODOS POSSÍVEIS -> local, producao */

$modo = 'local';

if($modo == 'local'){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "login";
}

if($modo == 'producao'){
    $servidor = "";
    $usuario = "";
    $senha = "";
    $banco = "";
}

try{
$pdo = new PDO ("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Banco conectado com sucesso";
}catch(PDOException $erro){
    echo "Falha ao conectar com o banco".$erro->getMessage();
}

function limparPost($dados){
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}