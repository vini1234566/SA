<?php
//configuração do banco de dados
$host = 'localhost';
$usuario = 'root';
$senha = 'root';
$banco = 'tstore';

//criação da conexão
$conexao = new mysqli($host, $usuario, $senha, $banco);

if($conexao->connect_error){
    die("Erro na conexão com o banco de dados:" .$conexao->connect_error);
}
