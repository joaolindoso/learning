<?php

require_once 'conexao.php';

$sql = "DELETE FROM cadastro WHERE id = 1";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Dados apagados com sucesso :)';
} else {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();