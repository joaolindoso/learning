<?php 

require_once 'conexao.php';

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Banco criado com sucesso :)';
} else {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();