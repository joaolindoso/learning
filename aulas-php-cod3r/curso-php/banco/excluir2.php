<?php
require_once 'conexao.php';

$conexao = novaConexao();

if($_GET['excluir']) {
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

$registros = [];

$sql = 'SELECT id, nome, nascimento, email FROM cadastro';
$resultado = $conexao->query($sql);

// fetch_assoc -> array() associativo
if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) { 
        $registros[] = $row;
    }

} elseif($conexao->error) {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();
?>

<table class="table">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Email</th>
        <th>Ações</th>

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
                    <td><a href="excluir2.php?excluir=<?= $registro['id'] ?>" class="btn btn-danger">Excluir</a></td>
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

    .btn {
        display: block;
        margin: 2px;
        padding: 5px;
        border: 1px solid #f1f1f1;
        box-shadow: 1px 1px 3px gray;
    }

    .btn-danger {
        background-color: red;
        color: white;
        text-align: center;
    }

</style>