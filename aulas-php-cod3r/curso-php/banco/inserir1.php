<?php

require_once 'conexao.php';

$sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario) 
    VALUES (
        'João',
        '1973-02-04',
        'joaol@email.com.br',
        'https://marieta123.sites.com.br',
        2,
        13000
    )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Dados inseridos com sucesso :)';
} else {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();