<?php

require_once 'conexao.php';

$sql = 'SELECT * FROM cadastro';

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];
// fetch_assoc -> array() associativo
if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) { 
        $registros[] = $row;
    }

} elseif($conexao->error) {
    echo 'Erro: ' . $conexao->error;
}

print_r($registros);

$conexao->close();
?>

<table class="table">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php 
            foreach($registros as $registro): ?>
                <tr>
                    <td><?= $registro['id'] ?></td>
                    <td><?= $registro['nome'] ?></td>
                    <td><?= 
                        //$registro['nascimento'] 
                        date('d/m/Y', strtotime($registro['nascimento']))
                    ?></td>
                    <td><?= $registro['email'] ?></td>
                </tr>
        
        <?php endforeach ?>
    </tbody>

</table>

<style>
    table > * {
        font-size: 1.2rem;
        font-family: sans-serif;
    }

    table {
        margin: 0 auto;
        width: 50%;
        border-collapse: collapse;
        border: 1px solid white;
    }

    tr {
        border: 1px solid gray;
    }

</style>
